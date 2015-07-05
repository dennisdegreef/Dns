<?php

namespace Link0\Dns\Entry\Type;

use Link0\Dns\Entry;
use Link0\Dns\Entry\Type;

final class Cname extends Type
{
    public function name()
    {
        return 'CNAME';
    }

    public function isSatisfiedBy($content)
    {
        return (new Rule\MustEndWithDot())->isSatisfiedBy($content);
    }
}