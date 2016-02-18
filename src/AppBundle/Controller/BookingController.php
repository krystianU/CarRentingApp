<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Client;
use AppBundle\Entity\Reservation;
use AppBundle\Form\Type\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookingController extends Controller
{
    public function indexAction()
    {
        return $this->redirectToRoute('search');
    }

    public function bookAction(Request $request, $slug) /*car type */
    {
        $client = new Client();

        $form = $this->createForm(ClientType::class, $client);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();
            $session = $this->get('session');

            $session->set('clientName', $data->getName());
            $session->set('clientSurname', $data->getSurname());
            $session->set('clientEmail', $data->getEmail());
            $session->set('clientPhoneNumber', $data->getPhoneNumber());

            return $this->redirectToRoute('confirmation', array(
                'slug'=> '12dv3cc3t4sj78',
            ), 301);
        }

        return $this->render('AppBundle:default:booking.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function confirmAction(Request $request, $slug)
    {
        $session = $this->get('session');

       $reservation = new Reservation();
       $reservation->setSlug($slug);
       $reservation->setPickupCity($session->get('pickupCity'));
       $reservation->setReturnCity($session->get('returnCity'));
       $reservation->setPickupDateTime($session->get('pickupDateTime'));
       $reservation->setReturnDateTime($session->get('returnDateTime'));
       $reservation->setCarId(1);
       $reservation->setClientName($session->get('clientName'));
       $reservation->setClientSurname($session->get('clientSurname'));
       $reservation->setClientEmail($session->get('clientEmail'));
       $reservation->setClientTelephone($session->get('clientPhoneNumber'));

        $pickupDateTime = $reservation->getPickupDateTime()->format('d-m-Y H:i');
        $returnDateTime = $reservation->getReturnDateTime()->format('d-m-Y H:i');

        return $this->render('AppBundle:default:confirmation.html.twig', array(
            'reservation'=>$reservation,
            'pickupDateTime'=>$pickupDateTime,
            'returnDateTime'=>$returnDateTime,
        ));
    }
}