<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new \Benchmark\Application(array('config' => array('cache_dir' => __DIR__ . '/../app/cache')));
$app->run();