<?php

namespace Resto\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $resa = array(
            "alex", "patrick"
        );

        return $this->render('RestoBackendBundle:Default:index.html.twig',
            array(
            "reservations" => $resa
            )
        );
    }
}
