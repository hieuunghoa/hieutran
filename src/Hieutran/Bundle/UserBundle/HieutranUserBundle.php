<?php

namespace Hieutran\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class HieutranUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
