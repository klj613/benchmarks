<?php

namespace Benchmark;

use Silex\Application as SilexApplication;
use Silex\Provider;

class Application extends SilexApplication
{
    /**
     * {@inheritDoc}
     */
    public function __construct(array $values = array())
    {
        parent::__construct($values);

        $this->initRouting();
        $this->initTwig();
    }

    /**
     * Init routing
     */
    private function initRouting()
    {
        $this->get('/', 'Benchmark\Controller\IndexController::indexAction')
            ->bind('homepage');
    }

    /**
     * Init twig
     */
    private function initTwig()
    {
        $this->register(new Provider\TwigServiceProvider(), array(
            'twig.path' => array(__DIR__ . '/Resources/views'),
            'twig.options' => array('cache' => $this['config']['cache_dir'] . '/twig')
        ));
    }
}