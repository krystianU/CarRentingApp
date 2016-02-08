<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:default:index.html.twig');
    }

    public function testAction()
    {
        $date = new \DateTime('today');
        $day = $date->format('d-m-Y');

        var_dump($day);
        die;
    }
}




