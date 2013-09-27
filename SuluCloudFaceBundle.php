<?php

namespace Sulu\Bundle\CloudFaceBundle;

use Sulu\Bundle\CloudFaceBundle\DependencyInjection\SuluCloudFaceExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class SuluCloudFaceBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $extension = new SuluCloudFaceExtension();
       $container->registerExtension($extension);
    }


}
