<?php

namespace KEURGUI\immoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KEURGUIimmoBundle:Default:index.html.twig');
    }
}
