<?php

namespace Link0\Dns\Entry\Type;

use Link0\Dns\Entry;
use Link0\Dns\Entry\Type;

/**
 * A Type
 *
 * @package Link0\Dns\Entry\Type
 */
final class A extends Type
{
    /**
     * @return string
     */
    public function name()
    {
        return 'A';
    }

    /**
     * @param string $content
     *
     * @return bool
     */
    public function isSatisfiedBy($content)
    {
        return (new Rule\MustContainIpv4Specification())->isSatisfiedBy($content);
    }
}