<?php

/*
 * This file is part of the Indigo Boilerplate project.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Proton\Application;
use League\Container\Container;

/**
 * This file is responsible for creating the application and
 * loading all resources which are necessary for the application to run.
 *
 * These include:
 *  - Environment check
 *  - Dependency container setup
 *  - Configuration loading (optional)
 */

/**
 * Setting up dependency container
 */
$diConfig = require __DIR__.'/di.php';
$container = new Container($diConfig);

/**
 * Instantiating the application
 */
$app = new Application;
$app->setContainer($container);

// The application path is protected from being overwritten
// Should be placed after configuration loading
$app->setConfig('path', __DIR__);

return $app;
