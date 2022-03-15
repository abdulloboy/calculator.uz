<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CalculatorController
{
    public function index($name)
    {
        return new Response("Hello");
    }

    public function add(float $one, float $two)
    {
        return new JsonResponse([
            'data' => $one + $two
        ]);
    }
}
