<?php

namespace Link0\Dns\Entry\Type;

use Link0\Dns\Entry\Type;

class AaaaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Type
     */
    private $type;

    public function setUp()
    {
        $this->type = new Aaaa();
    }

    public function test_type_returns_proper_name()
    {
        $this->assertEquals('AAAA', $this->type->name());
    }

    public function test_type_is_not_valid_with_empty_content()
    {
        $this->assertFalse($this->type->isSatisfiedBy(''));
    }

    public function test_type_is_not_valid_with_ipv4_content()
    {
        $this->assertFalse($this->type->isSatisfiedBy('127.0.0.1'));
    }

    public function test_type_is_valid_with_ipv6_content()
    {
        $this->assertTrue($this->type->isSatisfiedBy('fe80::1'));
    }

    public function test_type_is_not_valid_with_foobar_content()
    {
        $this->assertFalse($this->type->isSatisfiedBy('foobar'));
    }
}