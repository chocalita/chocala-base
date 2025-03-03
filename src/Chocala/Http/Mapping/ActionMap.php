<?php

namespace Chocala\Http\Mapping;

class ActionMap implements ActionMapInterface
{
    /**
     * @var string
     */
    private string $module;

    /**
     * @var string
     */
    private string $controller;

    /**
     * @var string
     */
    private string $action;

    /**
     * @var mixed
     */
    private $id;

    /**
     * @var array
     */
    private array $params;

    public function __construct()
    {
        $getArguments = func_get_args();
        $numberOfArguments = func_num_args();
        if (method_exists($this, $methodName = '__construct' . $numberOfArguments)) {
            call_user_func_array(array($this, $methodName), $getArguments);
        } else {
            throw new \InvalidArgumentException('Invalid number of arguments to create object ' . __CLASS__);
        }
    }

    private function __constructor($module, $controller, $action, $id, $params)
    {
        $this->module = $module;
        $this->controller = $controller;
        $this->action = $action;
        $this->id = $id;
        // TODO: change to ->  !is_array($this->params)
        if (!is_array($params)) {
            throw new \InvalidArgumentException('\'params\' value should be an array');
        }
        $this->params = $params;
    }

    private function __construct3($module, $controller, $action)
    {
        $this->__construct4($module, $controller, $action, []);
    }

    private function __construct4($module, $controller, $action, $params)
    {
        $this->__constructor($module, $controller, $action, null, $params);
    }

    private function __construct5($module, $controller, $action, $id, $params)
    {
        $this->__constructor($module, $controller, $action, $id, $params);
    }

    /**
     * @return string
     */
    public function module(): string
    {
        return $this->module;
    }

    /**
     * @return string
     */
    public function controller(): string
    {
        return $this->controller;
    }

    /**+
     * @return string
     */
    public function action(): string
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function params(): array
    {
        return $this->params;
    }
}
