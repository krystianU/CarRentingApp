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

       $reservation = new Reservation(1, $slug,
           $session->get('pickupCity'),
           $session->get('returnCity'),
           '20-02-2016',
           '27-02-2016',
           1,
           $session->get('clientName'),
           $session->get('clientSurname'),
           $session->get('clientEmail'),
           $session->get('clientPhoneNumber'), '12-02-2016', '12-02-2016', 'confirmed');

        return $this->render('AppBundle:default:confirmation.html.twig', array(
            'reservation'=>$reservation,
        ));
    }
}