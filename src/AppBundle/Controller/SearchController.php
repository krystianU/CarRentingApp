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