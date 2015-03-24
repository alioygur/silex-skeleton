<?php

namespace App\Providers;

use Illuminate\Config\Repository;
use Silex\Application;

class ConfigServiceProvider extends ServiceProviderAbstract
{
    private $config_path = '/../../config';

    public function register(Application $app)
    {
        $this->setApp($app);

        $app['config'] = $app->share(function () use ($app) {
            return new Repository($this->loadConfig());
        });
    }

    public function boot(Application $app)
    {
        // TODO: Implement boot() method.
    }

    private function loadConfig()
    {
        $config = $this->app['filesystem']->getRequire($this->mainConfigFile());

        if ($this->app['filesystem']->exists($this->environmentConfigFile())) {
            $environment_config = $this->app['filesystem']->getRequire($this->environmentConfigFile());
            $config = array_merge($config, $environment_config);
        }
        return $config;
    }

    private function mainConfigFile()
    {
        return __DIR__ . $this->config_path . '/config.php';
    }

    private function environmentConfigFile()
    {
        return __DIR__ . $this->config_path . '/' . $this->app['environment'] . '.config.php';
    }
}