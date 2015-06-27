<?php

namespace VF\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class VFUserBundle extends Bundle
{
     public function getParent()

  {

    return 'FOSUserBundle';

  }
}
