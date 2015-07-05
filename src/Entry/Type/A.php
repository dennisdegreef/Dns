<?php

namespace Link0\Dns\Entry\Type;

use Link0\Dns\Entry;
use Link0\Dns\Entry\Type;

final class A extends Type
{
    public function name()
    {
        return 'A';
    }

    public function isSatisfiedBy($content)
    {
        return (new Rule\MustContainIpv4Specification())->isSatisfiedBy($content);
    }
}