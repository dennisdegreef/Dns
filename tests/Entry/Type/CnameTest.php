<?php

namespace Link0\Dns\Entry\Type;

use Link0\Dns\Entry\Type;

class CnameTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Type
     */
    private $type;

    public function setUp()
    {
        $this->type = new Cname();
    }

    public function test_type_returns_proper_name()
    {
        $this->assertEquals('CNAME', $this->type->name());
    }

    public function test_type_is_not_valid_with_empty_content()
    {
        $this->assertFalse($this->type->isSatisfiedBy(''));
    }

    public function test_type_is_not_valid_without_trailing_dot()
    {
        $this->assertFalse($this->type->isSatisfiedBy('foo'));
    }

    public function test_type_is_valid_with_trailing_dot()
    {
        $this->assertTrue($this->type->isSatisfiedBy('foo.'));
    }
}