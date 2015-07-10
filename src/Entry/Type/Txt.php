<?php

namespace Link0\Dns\Entry\Type;

use Link0\Dns\Entry;
use Link0\Dns\Entry\Type;

/**
 * Txt type
 *
 * @package Link0\Dns\Entry\Type
 */
final class Txt extends Type
{
    /**
     * @return string
     */
    public function name()
    {
        return 'TXT';
    }

    /**
     * @param string $content
     *
     * @return bool
     */
    public function isSatisfiedBy($content)
    {
        return true;
    }
}