<?php

namespace Link0\Dns\Entry\Type\Rule;

final class IsOnlyAtSign
{
    public function isSatisfiedBy($content)
    {
        return ($content === '@');
    }
}