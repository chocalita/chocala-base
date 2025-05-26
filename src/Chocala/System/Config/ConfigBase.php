<?php

namespace Chocala\System\Config;

/**
 * Description of ConfigBase
 *
 * @author ypra
 */
abstract class ConfigBase
{
    /** Access restricted for superuser manager */
    public const PRIVATE_ACCESS = 'PRIVATE';

    /** Access restricted for admin manager */
    public const PROTECTED_ACCESS = 'PROTECTED';

    /** Access restricted for more roles manager */
    public const PUBLIC_ACCESS = 'PUBLIC';

    /**
     *
     * @var string
     */
    protected $access = null;

    /**
     *
     * @var string
     */
    protected $name = null;

    /**
     *
     * @var mixed
     */
    protected $value = null;

    /**
     *
     * @var string
     */
    protected $description = '';


    /**
     * @return string
     */
    public function getAccess(): ?string
    {
        return $this->access;
    }

    /**
     * @param string $access
     * @return void
     */
    public function setAccess($access): void
    {
        $this->access = $access;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return void
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     *
     * @param string $name Configuration name
     * @param mixed $value Configuration value
     * @param string $access Visibility of the configuration
     * @param string $description [optional] Description of the configuration
     */
    protected function __construct($name, $value, $access, $description = '')
    {
        $this->name = $name;
        $this->value = $value;
        $this->description = $description;
        $this->access = $access;
    }

    /**
     * Return an enum whit level access of configurations
     * @return array
     */
    public static function enumAccess(): array
    {
        return [
            self::PRIVATE_ACCESS => self::PRIVATE_ACCESS,
            self::PROTECTED_ACCESS => self::PROTECTED_ACCESS,
            self::PUBLIC_ACCESS => self::PUBLIC_ACCESS
        ];
    }
}
