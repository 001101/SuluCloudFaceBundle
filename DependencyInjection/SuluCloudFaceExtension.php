<?php

namespace Sulu\Bundle\CloudFaceBundle\DependencyInjection;

use MassiveArt\CloudFace\Provider\AmazonS3;
use MassiveArt\CloudFace\Provider\Dropbox;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;
/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class SuluCloudFaceExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');

       $cloudface = $container->get('my_cloud_face');
       $cloudface->setCloudProvider(new Dropbox());
        print_r($cloudface->getCloudProvider());

    }

    public function getAlias()
    {
        return 'sulu_cloud_face';
    }
}
