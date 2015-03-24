<?php

use App\Providers\ConfigServiceProvider;
use App\Providers\FilesystemServiceProvider;

require_once __DIR__ . '/../vendor/autoload.php';

$config = [
    'debug' => true,
    'environment' => 'production'
];

$app = new \Silex\Application($config);

$app->register(new FileSystemServiceProvider());
$app->register(new ConfigServiceProvider());

$app->get('/', function () use ($app) {
    return $app['config']->get("nasil", "iyi");
});

$app->run();

