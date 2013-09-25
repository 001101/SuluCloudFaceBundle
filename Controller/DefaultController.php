<?php

namespace Sulu\Bundle\CloudFaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SuluCloudFaceBundle:Default:index.html.twig', array('name' => $name));
    }
}
