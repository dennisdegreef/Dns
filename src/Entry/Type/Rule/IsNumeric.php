<?php

namespace Link0\Dns\Entry\Type\Rule;

final class IsNumeric
{
    public function isSatisfiedBy($content)
    {
        return is_numeric($content);
    }
}