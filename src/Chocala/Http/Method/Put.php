<?php

namespace Chocala\Http\Method;

use Chocala\Base\IllegalArgumentException;
use Chocala\Http\Request\Parts\MessageBodyInterface;
use Chocala\Http\Request\Parts\PostFormDataBody;
use Chocala\Http\Request\Parts\QueryParams;
use Chocala\Http\Request\Parts\QueryParamsInterface;

/**
 * Description of Put
 *
 * @author ypra
 */
class Put //implements HttpMethodInterface
{
    /**
     * @return mixed
     */
    public function contentsss()
    {
//        $rawInput = fopen('php://input', 'r');
//        $tempStream = fopen('php://temp', 'r+');
//        stream_copy_to_stream($rawInput, $tempStream);
//        rewind($tempStream);
//        return $tempStream;
//        $entityBody = stream_get_contents(STDIN);
//        return $entityBody;
        //TODO: get body
//        $request = new Request();
//        return $request->getBody();
        return '';
    }


    public function __construct()
    {
        $getArguments = func_get_args();
        $numberOfArguments = func_num_args();
        if (method_exists($this, $methodName = '__construct' . $numberOfArguments)) {
            call_user_func_array([$this, $methodName], $getArguments);
        } else {
            throw new \InvalidArgumentException('Invalid number of arguments to create object ' . __CLASS__);
        }
    }

    private function __constructor(QueryParamsInterface $queryParams, MessageBodyInterface $messageBody)
    {
        $this->queryParams = $queryParams;
        if ($messageBody instanceof PostFormDataBody) {
            throw new IllegalArgumentException('PUT method does not support $_POST body');
        }
        $this->messageBody = $messageBody;
    }

    private function __construct1(MessageBodyInterface $messageBody)
    {
        $this->__constructor(new QueryParams(), $messageBody);
    }

    private function __construct2(QueryParamsInterface $queryParams, MessageBodyInterface $messageBody)
    {
        $this->__constructor($queryParams, $messageBody);
    }

    /**
     * @return mixed
     */
    public function data()
    {
        return $this->messageBody->data();
    }
}
