<?php

namespace AppBundle\Controller;

use Sylius\Bundle\ResourceBundle\Controller\Configuration;
use Sylius\Component\Resource\Event\ResourceEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BirthController extends BaseController
{
    public function __construct(Configuration $config)
    {
        parent::__construct($config);

        $this->dataTableService = 'app.datatable.birth';

        $this->data = [
            'entityName' => ucfirst($this->config->getResourceName()),
            'pageTitle'  => ucfirst($this->config->getPluralResourceName()),
            'routes'     => [
                'index'  => 'birth_index',
                'create' => 'birth_create',
                'update' => 'birth_update',
                'delete' => 'birth_delete'
            ]
        ];
    }

    public function resultsAction()
    {
        $datatable = $this->get($this->dataTableService);
        $datatable->buildDatatable();

        $query = $this->get('sg_datatables.query')->getQueryFrom($datatable);

        $function = function ($qb) {
            $qb->andWhere("birth.brnNumber IS NOT NULL");
        };

        $query->addWhereAll($function);

        return $query->getResponse();
    }

    public function eventsAction(Request $request)
    {
        $datatable = $this->get($this->dataTableService);
        $datatable->setResultRoute('birth_events_results');
        $datatable->buildDatatable();

        return $this->render($this->config->getTemplate('events.html'), array_merge([
            'datatable' => $datatable
        ], $this->data));
    }

    public function eventResultsAction()
    {
        $datatable = $this->get($this->dataTableService);
        $datatable->setResultRoute('birth_events_results');
        $datatable->buildDatatable();

        $query = $this->get('sg_datatables.query')->getQueryFrom($datatable);

        $function = function ($qb) {
            $qb->andWhere("birth.brnNumber IS NULL");
        };

        return $query->getResponse();
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function createAction(Request $request)
    {
        $this->isGrantedOr403('create');

        $patient = $this->get('app.repository.patient')->find($request->get('id'));

        $resource = $this->createNew();
        $form     = $this->getForm($resource);

        if ($request->isMethod('POST') && $form->submit($request)->isValid()) {
            $resource = $this->domainManager->create($form->getData());
            if ($resource instanceof ResourceEvent) {
                return $this->redirectHandler->redirectToIndex();
            }
            return $this->redirectHandler->redirectTo($resource);
        }

        if ($this->config->isApiRequest()) {
            return $this->handleView($this->view($form, 400));
        }

        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('create.html'))
            ->setData(array_merge([
                $this->config->getResourceName() => $resource,
                'entity'                         => $resource,
                'form'                           => $form->createView(),
                'patient'                        => $patient
            ], $this->data));

        return $this->handleView($view);
    }

    public function translateAction()
    {
        $name = $this->getRequest()->request->get('name');

        $english = explode(' ', $name);
        $bangla = [];

        $repo = $this->container->get('doctrine')->getRepository('AppBundle:NameSuggest');

        foreach ($english as $word) {

            $translated = $repo->createQueryBuilder('w')
                ->select('w.english')
                ->where('w.bangla = :word')
                ->setParameter(':word', $word)
                ->orderBy('w.priority', 'desc')
                ->getQuery()
                ->getArrayResult()
            ;

            if ($translated) {
                $bangla[] = $translated[0]['english'];
            }
        }

        return new Response(implode(' ', $bangla));
    }
}
