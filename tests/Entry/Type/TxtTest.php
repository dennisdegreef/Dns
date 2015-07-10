<?php

namespace Link0\Dns\Entry\Type;

use Link0\Dns\Entry\Type;

class TxtTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Type
     */
    private $type;

    public function setUp()
    {
        $this->type = new Txt();
    }

    public function test_type_returns_proper_name()
    {
        $this->assertEquals('TXT', $this->type->name());
    }

    public function test_type_is_valid_for_any_content()
    {
        $this->assertTrue($this->type->isSatisfiedBy('foobar'));
    }
}