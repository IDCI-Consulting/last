<?php

namespace Fw\LastBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    const CONFIGURATION_ROOT = 'fw_last';

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder(self::CONFIGURATION_ROOT);

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('dist_folder')->end()
                ->arrayNode('providers')
                    ->children()
                        ->scalarNode('static')->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}