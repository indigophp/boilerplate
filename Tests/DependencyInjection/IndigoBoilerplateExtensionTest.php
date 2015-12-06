<?php

namespace Tests\Indigo\Bundle\BoilerplateBundle\DependencyInjection;

use Indigo\Bundle\BoilerplateBundle\DependencyInjection\IndigoBoilerplateExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

class IndigoBoilerplateExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions()
    {
        return [
            new IndigoBoilerplateExtension()
        ];
    }

    /**
     * @test
     */
    public function it_has_()
    {
        $this->load();
    }
}
