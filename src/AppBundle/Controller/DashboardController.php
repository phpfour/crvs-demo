<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render("AppBundle:Dashboard:index.html.twig", [
            'stats' => $this->get('app.repository.task')->getStats()
        ]);
    }
}