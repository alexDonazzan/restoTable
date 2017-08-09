<?php

namespace Resto\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RestoFrontBundle:Default:index.html.twig');
    }
}
