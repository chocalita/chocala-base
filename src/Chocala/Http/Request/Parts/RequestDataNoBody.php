<?php

namespace Chocala\Http\Request\Parts;

use Chocala\Base\UnsupportedOperationException;
use Exception;
use InvalidArgumentException;

/**
 * Description of Get
 *
 * @author ypra
 */
class RequestDataNoBody implements RequestDataInterface
{
    use RequestDataTrait;

    /**
     * @throws InvalidArgumentException
     */
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

    /**
     * @throws Exception
     */
    private function __constructor(QueryParamsInterface $queryParams)
    {
        $this->queryParams = $queryParams;
    }

    private function __construct0()
    {
        $this->__constructor(new QueryParams());
    }

    private function __construct1(QueryParamsInterface $queryParams)
    {
        $this->__constructor($queryParams);
    }

    /**
     * @return MessageBodyInterface
     * @throws Exception
     */
    public function body(): MessageBodyInterface
    {
        throw new UnsupportedOperationException('Safe HTTP method does not support body content');
    }

    /**
     * Returns data from 'queryParam' property, it's an array. Data is taken from the QueryString found in the Url.
     * @return array
     */
    public function data(): array
    {
        return $this->queryParams->data();
    }
}
