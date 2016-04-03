<?php

namespace AppBundle\Datatables;

use Sg\DatatablesBundle\Datatable\View\AbstractDatatableView;
use Sg\DatatablesBundle\Datatable\View\Style;

/**
 * Class BirthDatatable
 *
 * @package AppBundle\Datatables
 */
class BirthDatatable extends AbstractDatatableView
{
    protected $resultRoute = 'birth_results';

    public function setResultRoute($route)
    {
        $this->resultRoute = $route;
    }

    /**
     * {@inheritdoc}
     */
    public function buildDatatable($locale = null)
    {
        $this->features->set([
            'auto_width'    => true,
            'defer_render'  => false,
            'info'          => false,
            'jquery_ui'     => false,
            'length_change' => true,
            'ordering'      => true,
            'paging'        => true,
            'processing'    => true,
            'scroll_x'      => false,
            'scroll_y'      => '',
            'searching'     => true,
            'server_side'   => true,
            'state_save'    => false,
            'delay'         => 0,
            'extensions'    => []
        ]);

        $this->ajax->set([
            'url'  => $this->router->generate($this->resultRoute),
            'type' => 'GET'
        ]);

        $this->options->set([
            'display_start'                 => 0,
            'defer_loading'                 => -1,
            'dom'                           => 'lfrtip',
            'length_menu'                   => [10, 25, 50, 100],
            'order_classes'                 => true,
            'order'                         => [[0, 'asc']],
            'order_multi'                   => true,
            'page_length'                   => 15,
            'paging_type'                   => Style::FULL_NUMBERS_PAGINATION,
            'renderer'                      => '',
            'scroll_collapse'               => false,
            'search_delay'                  => 0,
            'state_duration'                => 7200,
            'stripe_classes'                => [],
            'class'                         => Style::BOOTSTRAP_3_STYLE,
            'individual_filtering'          => false,
            'individual_filtering_position' => 'foot',
            'use_integration_options'       => true,
            'force_dom'                     => false
        ]);

        if ($this->resultRoute == 'birth_results') {

            $this->columnBuilder
                ->add('brnNumber', 'column', [
                    'title' => 'BRN Number',
                ])
                ->add('birthDate', 'datetime', [
                    'title' => 'Birth Date',
                    'date_format' => 'll'
                ])
                ->add('name', 'column', [
                    'title' => 'Name',
                ])
                ->add('nameEnglish', 'column', [
                    'title' => 'Name (English)',
                ])
                ->add('fatherNameEnglish', 'column', [
                    'title' => 'Father\'s Name',
                ])
                ->add('motherNameEnglish', 'column', [
                    'title' => 'Mother\'s Name',
                ])
                ->add(null, 'action', [
                    'title'   => $this->translator->trans('datatables.actions.title'),
                    'actions' => [
                        [
                            'route'            => 'birth_show',
                            'route_parameters' => [
                                'id' => 'id'
                            ],
                            'label'            => $this->translator->trans('datatables.actions.show'),
                            'icon'             => 'fa fa-search',
                            'attributes'       => [
                                'rel'   => 'tooltip',
                                'title' => $this->translator->trans('datatables.actions.show'),
                                'class' => 'btn btn-xs',
                                'role'  => 'button'
                            ],
                        ]
                    ]
                ]);

        } else {

            $this->columnBuilder
                ->add('birthDate', 'datetime', [
                    'title' => 'Birth Date',
                    'date_format' => 'll'
                ])
                ->add('origin', 'column', [
                    'title' => 'Origin',
                ])
                ->add('fatherNameEnglish', 'column', [
                    'title' => 'Father\'s Name',
                ])
                ->add('fatherNID', 'column', [
                    'title' => 'Father\'s NID'
                ])
                ->add('motherNameEnglish', 'column', [
                    'title' => 'Mother\'s Name',
                ])
                ->add('motherNID', 'column', [
                    'title' => 'Mother\'s NID'
                ])
                ->add(null, 'action', [
                    'title'   => $this->translator->trans('datatables.actions.title'),
                    'actions' => [
                        [
                            'route'            => 'birth_update',
                            'route_parameters' => [
                                'id' => 'id'
                            ],
                            'label'            => "Register",
                            'icon'             => 'fa fa-plus',
                            'attributes'       => [
                                'rel'   => 'tooltip',
                                'title' => $this->translator->trans('datatables.actions.edit'),
                                'class' => 'btn btn-primary btn-xs',
                                'role'  => 'button'
                            ],
                        ]
                    ]
                ]);
        }

    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return 'AppBundle\Entity\Birth';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'birth_datatable';
    }
}
