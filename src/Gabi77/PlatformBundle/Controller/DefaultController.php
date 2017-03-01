<?php

namespace Gabi77\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Gabi77PlatformBundle:Default:index.html.twig');
    }
}
