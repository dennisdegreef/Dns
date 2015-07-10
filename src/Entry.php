<?php

namespace Link0\Dns;

use Link0\Dns\Entry\Type;

final class Entry
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Type
     */
    private $type;

    /**
     * @var int
     */
    private $expiry;

    /**
     * @var string
     */
    private $content;

    private function __construct($name, Type $type, $expiry, $content)
    {
        if($name < 1 || $name > 63) {
            throw new \Exception("Name '{$name}' should be between 1 and 63 characters");
        }

        $this->name = $name;
        $this->type = $type;
        $this->expiry = $expiry;
        $this->content = $content;

        if($type->isSatisfiedBy($content) === false) {
            throw new \Exception("Type '{$type->name()}' does not allow content '{$content}'");
        }
    }

    public static function create($name, Type $type, $expiry, $content)
    {
        return new static($name, $type, $expiry, $content);
    }

    public function name()
    {
        return $this->name;
    }

    public function type()
    {
        return $this->type;
    }

    public function expiry()
    {
        return $this->expiry;
    }

    public function content()
    {
        return $this->content;
    }
}