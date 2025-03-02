<?php

namespace Chocala\System\Config;

use Chocala\Base\IllegalArgumentException;

/**
 * Description of Parameter
 *
 * @author ypra
 */
class Parameter extends ConfigBase
{
    /** Integer values accepted */
    public const string TYPE_INTEGER = 'INTEGER';

    /** List of values accepted (Only by options)*/
    public const string TYPE_LIST = 'LIST';

    /** Number values accepted */
    public const string TYPE_NUMBER = 'NUMBER';

    /** Sequential list of values accepted (Only by options)*/
    public const string TYPE_SEQUENTIAL = 'SEQUENTIAL';

    /** String values accepted */
    public const string TYPE_STRING = 'STRING';

    /** Values 0/1 (On/Off) only accepted */
    public const string TYPE_SWITCH = 'SWITCH';

    /**
     *
     * @var string
     */
    protected ?string $type = null;

    /**
     *
     * @var array
     */
    protected array $options = [];

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return void
     */
    public function setType(string $type): void
    {
        if (!in_array($type, self::enumTypes())) {
            throw new IllegalArgumentException(sprintf('Value \'%s\' is not a valid [type].', $type));
        }
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param array $options
     * @return void
     */
    public function setOptions($options): void
    {
        if (!is_array($options)) {
            throw new IllegalArgumentException(sprintf('Invalid [options] value.'));
        }
        $this->options = $options;
    }

    /**
     *
     * @param string $name Configuration name
     * @param mixed $value Configuration value
     * @param string $type Type of data of configuration
     * @param string $access [optional] Visibility of the configuration
     * @param string $description [optional] Description of the configuration
     * @param array $options [optional] List of options by configuration
     */
    public function __construct(
        $name,
        $value,
        $type,
        $access = self::PROTECTED_ACCESS,
        string $description = '',
        array $options = []
    )
    {
        parent::__construct($name, $value, $access, $description);
        $this->setType($type);
        $this->setOptions($options);
    }

    /**
     * Return an enum with all the data types of configurations
     * @return array
     */
    public static function enumTypes(): array
    {
        return [
            self::TYPE_INTEGER => self::TYPE_INTEGER,
            self::TYPE_LIST => self::TYPE_LIST,
            self::TYPE_NUMBER => self::TYPE_NUMBER,
            self::TYPE_SEQUENTIAL => self::TYPE_SEQUENTIAL,
            self::TYPE_STRING => self::TYPE_STRING,
            self::TYPE_SWITCH => self::TYPE_SWITCH
        ];
    }
}
