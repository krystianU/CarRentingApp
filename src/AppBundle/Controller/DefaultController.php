<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SearchQuery;
use AppBundle\Form\Type\SearchQueryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:default:index.html.twig');
    }

    public function searchAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $query = new SearchQuery();
        $query->setPickupCity('Kraków');
        $query->setReturnCity('Warszawa');
        $query->setPickupDate(new \DateTime('tomorrow'));
        $query->setReturnDate(new \DateTime('tomorrow'));
        $query->setPickupTime(new \DateTime('10:00:00'));
        $query->setReturnTime(new \DateTime('20:30:00'));

        $form = $this->createForm(SearchQueryType::class, $query, array(
            'action' => $this->generateUrl('results'),
            'method' => 'GET',
            ));

        $form->handleRequest($request);

/*        if ($form->isSubmitted() && $form->isValid()) {
            // ... perform some action, such as saving the task to the database

            return $this->redirectToRoute('results');
        }*/

        return $this->render('AppBundle:default:form.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}




