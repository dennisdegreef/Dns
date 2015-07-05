<?php

namespace Link0\Dns\Entry\Type\Rule;

final class MustContainIpv6Specification
{
    public function isSatisfiedBy($content)
    {
        return (filter_var($content, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) !== false);
    }
}