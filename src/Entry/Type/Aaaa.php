<?php

namespace Link0\Dns\Entry\Type;

use Link0\Dns\Entry;
use Link0\Dns\Entry\Type;

final class Aaaa extends Type
{
    /**
     * @return string
     */
    public function name()
    {
        return 'AAAA';
    }

    /**
     * @param string $content
     *
     * @return bool
     */
    public function isSatisfiedBy($content)
    {
        return (new Rule\MustContainIpv6Specification())->isSatisfiedBy($content);
    }
}