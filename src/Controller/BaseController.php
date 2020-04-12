<?php

namespace App\Controller;

use App\Services\Greeting;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BaseController extends AbstractController
{
    protected $greeting;
    function __construct(Greeting $greeting)
    {
        $this->greeting = $greeting;
    }
    function isMaria($name)
    {
        $result = ($name ==='María')?true:false;
        return $result;
    }
}
