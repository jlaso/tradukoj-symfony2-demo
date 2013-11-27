<?php

namespace Jlaso\FormDemoBundle\Controller;

use Jlaso\FormDemoBundle\Form\Model\Customer;
use Jlaso\FormDemoBundle\Form\Type\CustomerRegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/demo/form/{_locale}", name="demo_form")
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

        $customer = new Customer();
        $form = $this->createForm(new CustomerRegistrationType(), $customer);

        return array(
            'languages' => $languages,
            'language'  => $_locale,
            'form'      => $form->createView(),
        );
    }

}
