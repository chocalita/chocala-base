<?php

namespace Chocala\Http\Request\Parts\Fakes;

use Chocala\Http\Request\Parts\MessageBodyInterface;
use Chocala\Http\Request\Parts\RawFormDataBody;

class FakeRawFormDataBody extends RawFormDataBody implements MessageBodyInterface
{
    public const DATA_COUNT = 4;

    public const RESOURCES_DIR = __DIR__ . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR;

    public static function contentType(string $contentTypeId = '852526859393702478530519'): string
    {
        return 'multipart/form-data; boundary=--------------------------' . $contentTypeId;
    }

    public static function rawData(string $filename = 'raw_form-data'): string
    {
        return file_get_contents(self::RESOURCES_DIR . $filename);
    }

    public function __construct()
    {
        $getArguments = func_get_args();
        $numberOfArguments = func_num_args();
        if (method_exists($this, $methodname = '__construct' . $numberOfArguments)) {
            call_user_func_array([$this, $methodname], $getArguments);
        } else {
            throw new \InvalidArgumentException('Invalid number of arguments to create object ' . __CLASS__);
        }
    }

    public function __constructor(string $contentType, string $rawData)
    {
        parent::__construct(
            $contentType,
            $rawData
        );
    }

    private function __construct0()
    {
        $contentType = self::contentType();
        $rawData = self::rawData();
        $this->__constructor($contentType, $rawData);
    }

    private function __construct2(string $contentTypeId, string $filename)
    {
        $contentType = self::contentType($contentTypeId);
        $rawData = self::rawData($filename);
        $this->__constructor($contentType, $rawData);
    }
}
