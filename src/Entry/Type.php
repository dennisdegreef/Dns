<?php

namespace Link0\Dns\Entry;

abstract class Type
{
    /**
     * @return string
     */
    abstract public function name();

    /**
     * @param string $content
     *
     * @return bool
     */
    abstract public function isSatisfiedBy($content);
}