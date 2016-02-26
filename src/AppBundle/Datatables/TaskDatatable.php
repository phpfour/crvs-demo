<?php

namespace AppBundle\Datatables;

use Sg\DatatablesBundle\Datatable\View\Style;
use Sg\DatatablesBundle\Datatable\View\AbstractDatatableView;

/**
 * Class TaskDatatable
 *
 * @package AppBundle\Datatables
 */
class TaskDatatable extends AbstractDatatableView
{
    /** @var string */
    private $resultRoute;

    /** @var boolean */
    private $lockOnly;

    /**
     * @param $path
     */
    public function setResultRoute($path)
    {
        $this->resultRoute = $path;
    }

    public function showLockOnly()
    {
        $this->lockOnly = true;
    }

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
            'page_length'                   => 10,
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
                'title' => 'ID'
            ])
            ->add('title', 'column', [
                'title' => 'Title',
                'width' => '50%'
            ])
            ->add('state', 'column', [
                'title'      => 'State',
                'searchable' => false
            ])
            ->add('lockedBy.firstName', 'column', [
                'title'      => 'Locked By',
                'searchable' => false
            ])
            ->add('published', 'boolean', [
                'title'      => 'Published',
                'searchable' => false
            ])
            ->add('updatedAt', 'datetime', [
                'title'      => 'Last Updated',
                'searchable' => false
            ]);

        if ($this->lockOnly) {

            $this->columnBuilder->add(null, 'action', [
                'title'   => $this->translator->trans('datatables.actions.title'),
                'actions' => [
                    [
                        'route'            => 'task_lock',
                        'route_parameters' => [
                            'id' => 'id'
                        ],
                        'label'            => 'Lock',
                        'icon'             => 'glyphicon glyphicon-lock',
                        'attributes'       => [
                            'rel'   => 'tooltip',
                            'title' => 'Lock this task',
                            'class' => 'btn btn-primary btn-xs btn-lock-task',
                            'role'  => 'button'
                        ],
                    ]
                ]
            ]);

        } else {

            $this->columnBuilder->add(null, 'action', [
                'title'   => $this->translator->trans('datatables.actions.title'),
                'actions' => [
                    [
                        'route'            => 'task_show',
                        'route_parameters' => [
                            'id' => 'id'
                        ],
                        'label'            => $this->translator->trans('datatables.actions.show'),
                        'icon'             => 'glyphicon glyphicon-eye-open',
                        'attributes'       => [
                            'rel'   => 'tooltip',
                            'title' => $this->translator->trans('datatables.actions.show'),
                            'class' => 'btn btn-info btn-xs',
                            'role'  => 'button'
                        ],
                    ],
                    [
                        'route'            => 'task_update',
                        'route_parameters' => [
                            'id' => 'id'
                        ],
                        'label'            => $this->translator->trans('datatables.actions.edit'),
                        'icon'             => 'glyphicon glyphicon-edit',
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
        return 'AppBundle\Entity\Task';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'task_datatable';
    }
}
