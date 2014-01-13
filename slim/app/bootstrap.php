<?php

require __DIR__ . '/vendor/autoload.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(
    array(
        'templates.path' => __DIR__ . '/templates'
    )
);

$app->notFound(
    function () use ($app) {
        $app->status(404);
        $app->render('404.php');
    }
);

$app->get(
    '/json',
    function () use ($app) {
        $app->status(200);
        $app->render('json.php');
    }
);

$app->run();
