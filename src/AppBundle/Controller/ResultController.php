<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

class ResultController extends Controller
{
    public function indexAction(Request $request)
    {
        var_dump($request->query->all());
        die();
    }
}