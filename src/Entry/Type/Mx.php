<?php

namespace Link0\Dns\Entry\Type;

use Link0\Dns\Entry;
use Link0\Dns\Entry\Type;

/**
 * Cname type
 *
 * @package Link0\Dns\Entry\Type
 */
final class Mx extends Type
{
    /**
     * @return string
     */
    public function name()
    {
        return 'MX';
    }

    /**
     * @param string $content
     *
     * @return bool
     */
    public function isSatisfiedBy($content)
    {
        $space = ' ';
        $hasSeparator = new Rule\HasSeparator($space, 1);
        if($hasSeparator->isSatisfiedBy($content) === false) {
            return false;
        }

        list($priority, $content) = explode($space, $content);

        return (new Rule\IsNumeric())->isSatisfiedBy($priority) && (
            (new Rule\MustEndWithDot())->isSatisfiedBy($content) ||
            (new Rule\IsOnlyAtSign())->isSatisfiedBy($content)
        );
    }
}