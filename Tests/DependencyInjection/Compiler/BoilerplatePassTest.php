<?php

namespace Tests\Indigo\Bundle\BoilerplateBundle\DependencyInjection\Compiler;

use Indigo\Bundle\BoilerplateBundle\DependencyInjection\Compiler\BoilerplatePass;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractCompilerPassTestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class BoilerplatePassTest extends AbstractCompilerPassTestCase
{
    protected function registerCompilerPass(ContainerBuilder $container)
    {
        $container->addCompilerPass(new BoilerplatePass());
    }

    /**
     * @test
     */
    public function it_has()
    {
        $this->compile();
    }
}
