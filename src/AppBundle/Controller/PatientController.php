<?php

namespace AppBundle\Controller;

use Sylius\Bundle\ResourceBundle\Controller\Configuration;

class PatientController extends BaseController
{
    public function __construct(Configuration $config)
    {
        parent::__construct($config);

        $this->dataTableService = 'app.datatable.patient';

        $this->data = [
            'entityName' => ucfirst($this->config->getResourceName()),
            'pageTitle'  => 'Admitted ' . ucfirst($this->config->getPluralResourceName()),
            'addButton'  => 'Register ' . ucfirst($this->config->getResourceName()),
            'routes'     => [
                'index'  => 'patient_index',
                //'create' => 'patient_create',
                'update' => 'patient_update',
                'delete' => 'patient_delete'
            ]
        ];
    }
}