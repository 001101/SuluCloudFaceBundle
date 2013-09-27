<?php

namespace Sulu\Bundle\CloudFaceBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{


    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('sulu_cloud_face');

        $rootNode->children()->scalarNode('response_type')->defaultValue('code')->end()->scalarNode(
                'client_id'
            )->defaultvalue('App Key') // App Key from App Console
            ->end()->scalarNode('grant_type')->defaultValue('authorization_code')->end()->scalarNode(
                'code'
            )->defaultvalue('') // Authorization code obtained from previous step
            ->end();

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
