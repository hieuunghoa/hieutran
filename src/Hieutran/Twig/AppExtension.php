<?php

namespace Hieutran\Twig;

use Symfony\Component\HttpFoundation\RequestStack;
use Twig_Extension;
use Twig_SimpleFilter;

class AppExtension extends Twig_Extension
{
    protected $requestStack;

    public function __construct(RequestStack $requestStack){

        $this->requestStack = $requestStack;
    }

    public function getFilters()
    {
        return array(
            new Twig_SimpleFilter('activeNav', array($this, 'activeNavFilter')),
        );
    }

    public function activeNavFilter($router, $result = 'active')
    {
        if($this->requestStack->getCurrentRequest()->attributes->get('_route') === $router) {
            return $result;
        }
    }

    public function getName()
    {
        return 'app_extension';
    }
}