<?php

namespace Chocala\Http\Request\Parts;

use InvalidArgumentException;

/**
 * Description of Post
 *
 * @author ypra
 */
class RequestData implements RequestDataInterface
{
    use RequestDataTrait;

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

    private function __constructor(QueryParamsInterface $queryParams, MessageBodyInterface $messageBody)
    {
        $this->queryParams = $queryParams;
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
