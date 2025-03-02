<?php

namespace Chocala\Base;

use Throwable;

class UnsupportedOperationException extends ChocalaException
{
    public function __construct(string $message, int $code = UNSUPPORTED_EXCEPTION, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
