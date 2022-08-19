<?php //У кажого сервиса будет провайдер, и каждый провайдер будет наследником этого абстрактного провайдера и он будет получать все зависимости. Он обящзательно должен будет содержать инициализации всех абстрактных медотов данногго провайдера.

namespace Engine\Service;

abstract class AbstractProvider
{
    /**
     * @var \Engine\DI\DI;
     */
    protected $di;

    /**
     * @param \Engine\DI\DI $di
     */
    public function __construct(\Engine\DI\DI $di) {
        $this->di = $di;
    }

    /**
     * @return mixed
     */
    abstract function init();

}