<?php

namespace App\Controller;

use App\Services\Greeting;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route("/demo/{name}", name="demo")
     */
    public function index(Greeting $greeting, $name)
    {
        dump($name);
        $greet = $greeting->greet($name);
        /*return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);*/
        return new Response($greet);
    }
}
