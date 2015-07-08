<?php

namespace Link0\Dns\Entry\Type;

use Link0\Dns\Entry\Type;

class MxTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Type
     */
    private $type;

    public function setUp()
    {
        $this->type = new Mx();
    }

    public function test_type_returns_proper_name()
    {
        $this->assertEquals('MX', $this->type->name());
    }

    public function test_type_is_not_valid_with_empty_content()
    {
        $this->assertFalse($this->type->isSatisfiedBy(''));
    }

    public function test_type_is_not_valid_with_only_at_sign_and_no_dot()
    {
        $this->assertFalse($this->type->isSatisfiedBy('@'));
    }

    public function test_type_is_not_valid_without_trailing_dot()
    {
        $this->assertFalse($this->type->isSatisfiedBy('foo'));
    }

    public function test_type_is_not_valid_with_trailing_dot()
    {
        $this->assertFalse($this->type->isSatisfiedBy('foo.'));
    }

    public function test_type_is_not_valid_with_number_and_separator_but_no_content()
    {
        $this->assertFalse($this->type->isSatisfiedBy('1337 '));
    }

    public function test_type_is_not_valid_without_number_but_with_separator_and_content()
    {
        $this->assertFalse($this->type->isSatisfiedBy(' foo.'));
    }

    public function test_type_is_valid_with_number_separator_and_content()
    {
        $this->assertTrue($this->type->isSatisfiedBy('1 foo.'));
    }
}