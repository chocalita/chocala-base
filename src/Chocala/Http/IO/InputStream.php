<?php

namespace Chocala\Http\IO;

use InvalidArgumentException;

class InputStream implements InputStreamInterface
{
    /**
     * @var string
     */
    protected string $content;

    public function __construct()
    {
        $getArguments = func_get_args();
        $numberOfArguments = func_num_args();
        if (method_exists($this, $methodName = '__construct' . $numberOfArguments)) {
            call_user_func_array([$this, $methodName], $getArguments);
        } else {
            throw new InvalidArgumentException('Invalid number of arguments to create object ' . __CLASS__);
        }
    }

    private function __constructor(string $content)
    {
        $this->content = $content;
    }

    private function __construct0()
    {
        $this->__constructor(file_get_contents('php://input'));
    }

    private function __construct1($content)
    {
        if (!is_string($content)) {
            throw new \InvalidArgumentException('Invalid number of arguments to create object ' . __CLASS__);
        }
        $this->__constructor($content);
    }

    /**
     * @inheritDoc
     */
    public function content(): string
    {
        return $this->content;
    }
}
