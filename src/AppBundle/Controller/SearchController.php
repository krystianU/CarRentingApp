<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Car;
use AppBundle\Entity\SearchQuery;
use AppBundle\Form\Type\SearchQueryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    public function searchAction(Request $request)
    {
        $query = new SearchQuery();

        $form = $this->createForm(SearchQueryType::class, $query);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();
            $session = $this->get('session');

            $session->set('pickupCity', $data->getPickupCity());
            $session->set('returnCity', $data->getReturnCity());
            $session->set('pickupDateTime', $data->getPickupDateTime());
            $session->set('returnDateTime', $data->getReturnDateTime());

            $car = new Car('Fiat', 'Premium', 4, 4, 'Manual', 40);

            return $this->render('AppBundle:default:results.html.twig', array(
                'form' => $form->createView(),
                'car' => $car,
            ));
        }

        return $this->render('AppBundle:default:search.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}