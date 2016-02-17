<?php

namespace AppBundle\Controller;


use AppBundle\Entity\StatusQuery;
use AppBundle\Form\Type\StatusQueryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StatusController extends Controller
{

    public function indexAction(Request $request)
    {
        $query = new StatusQuery();

        $form = $this->createForm(StatusQueryType::class, $query);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            return $this->redirectToRoute('show_reservation', array(
                'slug' => '12dv3cc3t4sj78',
            ), 301);
        }

        return $this->render('AppBundle:default:find_status.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function displayAction(Request $request, $slug)
    {

        return $this->render('AppBundle:default:status.html.twig'
        );
    }
}