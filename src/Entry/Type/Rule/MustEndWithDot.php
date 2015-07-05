<?php

namespace Link0\Dns\Entry\Type\Rule;

final class MustEndWithDot
{
    public function isSatisfiedBy($content)
    {
        return (\substr($content, -1, 1) === '.');
    }
}