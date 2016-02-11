<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Car;
use AppBundle\Entity\SearchQuery;
use AppBundle\Form\Type\SearchQueryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    public function indexAction()
    {
        return $this->redirectToRoute('search');
    }

    public function searchAction(Request $request)
    {
        $session = $this->get('session');

        $query = new SearchQuery();
        $query->setPickupCity('Kraków');
        $query->setReturnCity('Warszwa');
        $query->setPickupDateTime(new \DateTime('15-02-2016 10:00'));
        $query->setReturnDateTime(new \DateTime('22-02-2016 17:00'));

        $form = $this->createForm(SearchQueryType::class, $query);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();

            $session->set('pickupCity', $data->getPickupCity());
            $session->set('returnCity', $data->getReturnCity());
            $session->set('pickupDateTime', $data->getPickupDateTime());
            $session->set('returnDateTime', $data->getReturnDateTime());

            return $this->redirectToRoute('results', array(
                'pickupCity' => $data->getPickupCity(),
                'returnCity' => $data->getReturnCity(),
                'pickupDate' => $data->getPickupDateTime()->format('d-m-Y-H-i'),
                'returnDate' => $data->getReturnDateTime()->format('d-m-Y-H-i'),
            ), 301);
        }

        return $this->render('AppBundle:default:search.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function resultAction(Request $request, $pickupCity, $returnCity, $pickupDate, $returnDate)
    {
        $session = $this->get('session');

        $query = new SearchQuery();

        /*Repopulate form */
        $query->setPickupCity($session->get('pickupCity'));
        $query->setReturnCity($session->get('returnCity'));
        $query->setPickupDateTime($session->get('pickupDateTime'));
        $query->setReturnDateTime($session->get('returnDateTime'));

        /*Trying to access not through search route */
        if ($query->getPickupCity() == null || $query->getReturnCity() == null || $query->getPickupDateTime() == null || $query->getReturnDateTime() == null) {
            return $this->redirectToRoute('results_error');
        }

        /*Trying to access not through search route */
        if ($query->getPickupCity() != $pickupCity || $query->getReturnCity() != $returnCity || $query->getPickupDateTime() != \DateTime::createFromFormat('d-m-Y-H-i', $pickupDate) || $query->getReturnDateTime() != \DateTime::createFromFormat('d-m-Y-H-i', $returnDate)) {
            return $this->redirectToRoute('results_error');
        }

        $form = $this->createForm(SearchQueryType::class, $query);

        /*Handle new search query */

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $session = $this->get('session');
            $data = $form->getData();

            $session->set('pickupCity', $data->getPickupCity());
            $session->set('returnCity', $data->getReturnCity());
            $session->set('pickupDateTime', $data->getPickupDateTime());
            $session->set('returnDateTime', $data->getReturnDateTime());

            return $this->redirectToRoute('results', array(
                'pickupCity' => $data->getPickupCity(),
                'returnCity' => $data->getReturnCity(),
                'pickupDate' => $data->getPickupDateTime()->format('d-m-Y-H-i'),
                'returnDate' => $data->getReturnDateTime()->format('d-m-Y-H-i'),
            ), 301);
        }

        /*Display resutls logic */

        $car = new Car(1, 'fiat-126p', 'Fiat 126p', 'Mini', 4, 2, 'Manual', 30);

        return $this->render('AppBundle:default:results.html.twig', array(
            'form' => $form->createView(),
            'car' => $car,
        ));
    }

}