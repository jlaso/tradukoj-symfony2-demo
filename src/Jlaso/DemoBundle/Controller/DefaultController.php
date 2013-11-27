<?php

namespace Jlaso\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/{_locale}", name="home")
     * @Template()
     */
    public function indexAction($_locale = null)
    {
        $config = $this->container->getParameter('translations_api');
        $languages = $config['managed_locales'];
        $default = $config['default_locale'];
        if(null === $_locale){
            $_locale = $default;
        }

        return array(
            'languages' => $languages,
            'language'  => $_locale,
        );
    }
}
