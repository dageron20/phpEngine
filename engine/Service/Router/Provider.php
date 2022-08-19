<?php

namespace Engine\Service\Router;

use Engine\Core\Router\Router;
use Engine\Service\AbstractProvider;

class Provider extends AbstractProvider
{

    /**
     * @var string
     */
    public $serviceName = 'router';
    /**
     * @return mixed|void
     */
    public function init()
    {
        $router = new Router('http://localhost:63342/php/index.php?_ijt=b0neec4l4k4rufs4nq7c1mbm8b&_ij_reload=RELOAD_ON_SAVE');

        $this->di->set($this->serviceName, $router);
    }
}