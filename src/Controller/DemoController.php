<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends BaseController
{
    /**
     * @Route("/demo/{name}", name="demo")
     */
    public function index($name)
    {
        dump($this->isMaria($name));
        $greet = $this->greeting->greet($name);
        return new Response($greet);
    }
}
