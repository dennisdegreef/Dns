<?php

namespace Link0\Dns\Entry\Type;

use Link0\Dns\Entry;
use Link0\Dns\Entry\Type;

/**
 * Cname type
 *
 * @package Link0\Dns\Entry\Type
 */
final class Cname extends Type
{
    /**
     * @return string
     */
    public function name()
    {
        return 'CNAME';
    }

    /**
     * @param string $content
     *
     * @return bool
     */
    public function isSatisfiedBy($content)
    {
        return (new Rule\MustEndWithDot())->isSatisfiedBy($content)
            || (new Rule\IsOnlyAtSign())->isSatisfiedBy($content)
            ;
    }
}