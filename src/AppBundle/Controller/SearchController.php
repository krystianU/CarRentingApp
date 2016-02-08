<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SearchQuery;
use AppBundle\Form\Type\SearchQueryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    public function searchAction(Request $request)
    {
        $query = new SearchQuery();

        $query->setPickupCity('Kraków');
        $query->setReturnCity('Warszawa');
        $query->setPickupDate(new \DateTime('tomorrow'));
        $query->setReturnDate(new \DateTime('tomorrow'));
        $query->setPickupTime(new \DateTime('10:00:00'));
        $query->setReturnTime(new \DateTime('20:30:00'));

        $form = $this->createForm(SearchQueryType::class, $query);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            return $this->render('AppBundle:default:results.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        return $this->render('AppBundle:default:search.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}