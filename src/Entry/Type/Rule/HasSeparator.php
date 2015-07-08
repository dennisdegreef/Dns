<?php

namespace Link0\Dns\Entry\Type\Rule;

final class HasSeparator
{
    private $separator;
    private $amount;

    public function __construct($separator, $amount = 1)
    {
        $this->separator = $separator;
        $this->amount = $amount;
    }

    public function isSatisfiedBy($content)
    {
        return strpos($content, $this->separator) !== false;
    }
}