<?php

/*
 * This file is part of the Indigo Boilerplate project.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

defined('APP_ROOT') or define('APP_ROOT', realpath(__DIR__.'/../'));

require APP_ROOT.'/vendor/autoload.php';

$app = require APP_ROOT.'/app/bootstrap.php';

$app->run();
