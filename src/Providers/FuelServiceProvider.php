<?php

/*
 * This file is part of the FuelPHP Skeleton package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fuel\Skeleton\Providers;

use Fuel\Dependency\ServiceProvider;

/**
 * Provides skeleton service
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class FuelServiceProvider extends ServiceProvider
{
	/**
	 * {@inheritdoc}
	 */
	public $provides = ['skeleton'];

	/**
	 * {@inheritdoc}
	 */
	public function provide()
	{
		// DI logic here
	}
}
