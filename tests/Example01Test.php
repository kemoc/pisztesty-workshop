<?php

use \PHPUnit\Framework\TestCase;

final class Example01Test extends TestCase
{
    public function testSayHello()
    {
        $sut = new PhpCon();

        $result = $sut->sayHello('phpunit');

        $this->assertEquals('Hello phpunit!', $result);
    }

    public function testTrueShouldBeTrue()
    {
        $x = 10;
        $this->assertTrue(false, "Sorry, expects TRUE value ;(");
    }
}
