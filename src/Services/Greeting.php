<?php
namespace App\Services;
class Greeting
{
    public function greet($name)
    {
        if($name === 'María'){
            $result = 'Bienvenida de nuevo, María';
        }else{
            $result =  '¡Hola '.$name.'!';
        }
        return $result;
    }
}