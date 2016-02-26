<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Google\Drive;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\HttpFoundation\Request;
use Sylius\Bundle\ResourceBundle\Controller\ResourceController;

class TaskController extends ResourceController
{
    public function indexAction(Request $request)
    {
        $datatable = $this->get('app.datatable.task');
        $datatable->setResultRoute('task_results');
        $datatable->buildDatatable();

        return $this->render('AppBundle:Task:index.html.twig', [
            'datatable' => $datatable,
            'pageTitle' => 'Tasks'
        ]);
    }

    public function resultsAction()
    {
        $datatable = $this->get('app.datatable.task');
        $datatable->setResultRoute('task_results');
        $datatable->buildDatatable();

        $query = $this->get('sg_datatables.query')->getQueryFrom($datatable);
        return $query->getResponse();
    }

    public function groupTasksAction(Request $request)
    {
        $datatable = $this->get('app.datatable.task');
        $datatable->setResultRoute('group_task_results');
        $datatable->showLockOnly();
        $datatable->buildDatatable();

        return $this->render('AppBundle:Task:index.html.twig', [
            'datatable' => $datatable,
            'pageTitle' => 'Group Tasks'
        ]);
    }

    public function groupTasksResultsAction()
    {
        $datatable = $this->get('app.datatable.task');
        $datatable->setResultRoute('group_task_results');
        $datatable->showLockOnly();
        $datatable->buildDatatable();

        $query = $this->get('sg_datatables.query')->getQueryFrom($datatable);

        $function = function(QueryBuilder $qb) {
            $qb->andWhere($qb->getRootAlias() . ".state = :state");
            $qb->andWhere($qb->getRootAlias() . ".lockedBy IS NULL");
            $qb->setParameter('state', $this->getUser()->getGroupState());
        };

        $query->addWhereAll($function);

        return $query->getResponse();
    }

    public function myTasksAction(Request $request)
    {
        $datatable = $this->get('app.datatable.task');
        $datatable->setResultRoute('my_task_results');
        $datatable->buildDatatable();

        return $this->render('AppBundle:Task:index.html.twig', [
            'datatable' => $datatable,
            'pageTitle' => 'My Tasks'
        ]);
    }

    public function myTasksResultsAction()
    {
        $datatable = $this->get('app.datatable.task');
        $datatable->setResultRoute('my_task_results');
        $datatable->buildDatatable();

        $query = $this->get('sg_datatables.query')->getQueryFrom($datatable);

        $function = function(QueryBuilder $qb) {
            $qb->andWhere($qb->getRootAlias() . ".lockedBy = :user");
            $qb->setParameter('user', $this->getUser()->getId());
        };

        $query->addWhereAll($function);

        return $query->getResponse();
    }

    public function lockAction(Request $request)
    {
        if (!$this->get('session')->has('oauth_token')) {
            return $this->redirectToRoute('google_login');
        }

        /** @var Task $task */
        $task = $this->findOr404($request);

        /** @var Drive $drive */
        $drive = $this->get('app.google.drive');

        if ($task) {
            $this->getRepository()->lockTask($task, $this->getUser());
            $this->getDoctrine()->getRepository('AppBundle:Image')->populateImages($task, $drive);
            return $this->redirectToRoute('group_task_index');
        }
    }
}
