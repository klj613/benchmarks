<?php

namespace Benchmark\Controller;

use Benchmark\Application;
use Symfony\Component\HttpFoundation\Response;

class IndexController
{
    public function indexAction(Application $app)
    {
        $response = new Response(
            $app['twig']->render('Index/index.html.twig', array())
        );

        return $response;
    }
}