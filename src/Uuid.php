<?php

namespace Link0\Dns;

use Rhumsaa\Uuid\Uuid as RhumsaaUuid;

final class Uuid
{
    private function __construct($uuidv4)
    {
        $this->uuidv4 = $uuidv4;
    }

    public static function create()
    {
        return new self(RhumsaaUuid::uuid4()->toString());
    }

    public static function fromString($uuidv4)
    {
        if(!RhumsaaUuid::isValid($uuidv4)) {
            throw new \InvalidArgumentException("Invalid UUIDv4 '{$uuidv4}'");
        }
        return new self(RhumsaaUuid::fromString($uuidv4));
    }
}