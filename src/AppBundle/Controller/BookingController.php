<?php
/**
 * Created by PhpStorm.
 * User: Arkadiusz
 * Date: 09.02.2016
 * Time: 23:27
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookingController extends Controller
{
    public function indexAction(Request $request)
    {
        $reservation = new Reservation(1,'Krakow', 'Warszawa', '2016-04-03', '2016-05-02','Jan','Kowalski', 'j.kowalski@o2.pl', '111111111');
        return $this->render('AppBundle:default:confirmation.html.twig', array(
            'reservation'=>$reservation,
        ));
    }
}