<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 25.03.2015
 * Time: 01:21
 */

namespace App\Providers;


use Silex\Application;
use Silex\ServiceProviderInterface;

class ServiceProviderAbstract implements ServiceProviderInterface
{
    public $app;

    protected function setApp(Application $application)
    {
        $this->app = $application;
    }

    /**
     * Registers services on the given app.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     */
    public function register(Application $app)
    {
        // TODO: Implement register() method.
    }

    /**
     * Bootstraps the application.
     *
     * This method is called after all services are registered
     * and should be used for "dynamic" configuration (whenever
     * a service must be requested).
     */
    public function boot(Application $app)
    {
        // TODO: Implement boot() method.
    }
}