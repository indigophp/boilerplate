<?php

/*
 * This file is part of the Indigo Boilerplate project.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * This file is responsible for any application bootstrapping before running it
 *
 * Environment loading, language, routes, wrappers, event listeners should all be set here
 */

// Loading initialized application
$app = require __DIR__.'/app.php';

// Adding routes
$app->get('/', 'controller::index');

return $app;
