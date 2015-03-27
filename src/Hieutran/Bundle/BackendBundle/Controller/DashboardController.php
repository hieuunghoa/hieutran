<?php

namespace Hieutran\Bundle\BackendBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class DashboardController extends FOSRestController
{
    public function getDashboardAction()
    {
        $view = $this->view('', 200)
            ->setTemplate('HieutranBackendBundle:Dashboard:dashboard.html.twig')
        ;

        return $this->handleView($view);
    }
}
