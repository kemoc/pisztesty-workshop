<?php

use \PHPUnit\Framework\TestCase;

final class Exercise01Test extends TestCase
{
    public function testSayHello()
    {
        $sut = new Exercise01();

        $result = $sut->sayHello('phpunit');

        $this->assertEquals('Hello phpunit!', $result);
    }

    public function testTrueShouldBeTrue()
    {
        $this->assertTrue(true, "Sorry, expects TRUE value ;(");
    }
}
