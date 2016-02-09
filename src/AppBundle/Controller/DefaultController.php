<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Client;
use AppBundle\Form\Type\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
    public function bookAction(Request $request)
    {
        $client = new Client();

        $form = $this->createForm(ClientType::class, $client);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        }

        return $this->render('AppBundle:default:booking.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}




