<?php

/*
 * This file is part of the Indigo Skeleton project.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require __DIR__.'/../vendor/autoload.php';

$app = new Proton\Application;

$app['Controller'] = function() use ($app) {
    return new Controller($app);
};

$app->get('/', 'Controller::index');

$app->run();
