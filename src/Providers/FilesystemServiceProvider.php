<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 25.03.2015
 * Time: 00:44
 */

namespace App\Providers;


use Illuminate\Filesystem\Filesystem;
use Silex\Application;
use Silex\ServiceProviderInterface;

class FilesystemServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['filesystem'] = $app->share(function () use ($app) {
            return new Filesystem();
        });
    }

    public function boot(Application $app)
    {
        // TODO: Implement boot() method.
    }
}