<?php

namespace Tests\Indigo\Bundle\BoilerplateBundle\DependencyInjection;

use Indigo\Bundle\BoilerplateBundle\DependencyInjection\Configuration;
use Matthias\SymfonyConfigTest\PhpUnit\ConfigurationTestCaseTrait;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    use ConfigurationTestCaseTrait;

    protected function getConfiguration()
    {
        return new Configuration();
    }

    /**
     * @test
     */
    public function it_is_a_valid_configuration()
    {
        $this->assertConfigurationIsInvalid([[null]]);
    }
}
