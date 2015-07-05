<?php

namespace Link0\Dns;

use Assert\Assertion;

final class EntrySet implements AggregateRoot
{
    private $uuid;
    private $serial;
    private $entries;

    private function __construct(Uuid $uuid, $serial, $entries)
    {
        $this->uuid = $uuid;
        $this->serial = $serial;
        $this->entries = $entries;

        Assertion::allIsInstanceOf($entries, Entry::class);
    }

    public static function create(array $entries)
    {
        return new self(Uuid::create(), 1, $entries);
    }

    public function uuid()
    {
        return $this->uuid;
    }

    public function entries()
    {
        return $this->entries;
    }
}