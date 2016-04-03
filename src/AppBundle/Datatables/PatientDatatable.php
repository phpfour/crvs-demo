<?php

namespace AppBundle\Datatables;

use Sg\DatatablesBundle\Datatable\View\AbstractDatatableView;
use Sg\DatatablesBundle\Datatable\View\Style;

/**
 * Class PatientDatatable
 *
 * @package AppBundle\Datatables
 */
class PatientDatatable extends AbstractDatatableView
{
    /**
     * {@inheritdoc}
     */
    public function buildDatatable($locale = null)
    {
        $this->features->set([
            'auto_width'    => true,
            'defer_render'  => false,
            'info'          => true,
            'jquery_ui'     => false,
            'length_change' => false,
            'ordering'      => true,
            'paging'        => true,
            'processing'    => true,
            'scroll_x'      => false,
            'scroll_y'      => '',
            'searching'     => false,
            'server_side'   => true,
            'state_save'    => false,
            'delay'         => 0,
            'extensions'    => []
        ]);

        $this->ajax->set([
            'url'  => $this->router->generate('patient_results'),
            'type' => 'GET'
        ]);

        $this->options->set([
            'display_start'                 => 0,
            'defer_loading'                 => -1,
            'dom'                           => 'lfrtip',
            'length_menu'                   => [10, 25, 50, 100],
            'order_classes'                 => true,
            'order'                         => [[5, 'desc']],
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

        $this->columnBuilder
            ->add('id', 'column', [
                'title' => 'ID',
            ])
            ->add('name', 'column', [
                'title' => 'Name',
            ])
            ->add('husbandName', 'column', [
                'title' => 'Husband Name',
            ])
            ->add('age', 'column', [
                'title' => 'Age',
            ])
            ->add('admitDate', 'datetime', [
                'title' => 'Admission Date',
                'date_format' => 'll'
            ])
            ->add('roomNumber', 'column', [
                'title' => 'Room Number',
            ])
            ->add(null, 'action', [
                'title'   => $this->translator->trans('datatables.actions.title'),
                'actions' => [
                    [
                        'route'            => 'birth_create',
                        'route_parameters' => [
                            'id' => 'id'
                        ],
                        'label'            => "New Infant",
                        'icon'             => 'fa fa-plus',
                        'attributes'       => [
                            'rel'   => 'tooltip',
                            'title' => $this->translator->trans('datatables.actions.edit'),
                            'class' => 'btn btn-xs',
                            'role'  => 'button'
                        ],
                    ],
                    [
                        'route'            => 'patient_show',
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
                    ],
                    [
                        'route'            => 'patient_update',
                        'route_parameters' => [
                            'id' => 'id'
                        ],
                        'label'            => $this->translator->trans('datatables.actions.edit'),
                        'icon'             => 'fa fa-edit',
                        'attributes'       => [
                            'rel'   => 'tooltip',
                            'title' => $this->translator->trans('datatables.actions.edit'),
                            'class' => 'btn btn-xs',
                            'role'  => 'button'
                        ],
                    ]
                ]
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return 'AppBundle\Entity\Patient';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'patient_datatable';
    }
}
