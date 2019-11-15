<?php

class FizzBuzz
{
    public  function check(int $number) : string
    {
        $result = '';

        if ($number % 3 === 0) {
            $result .= 'Fizz';
        }

        if ($number % 5 === 0) {
            $result .= 'Buzz';
        }

        return $result ? $result : (string)$number;
    }
}

final class FizzBuzzTests extends \PHPUnit\Framework\TestCase
{
    public function testNumberDivBy3ReturnFizz()
    {
        $sut = new FizzBuzz();

        $result = $sut->check(3);

        $this->assertEquals('Fizz', $result);
    }

    public function testNumberDivBy5ReturnBuzz()
    {
        $sut = new FizzBuzz();

        $result = $sut->check(5);

        $this->assertEquals('Buzz', $result);
    }

    public function testNumberDivBy3And5ReturnFizzBuzz()
    {
        $sut = new FizzBuzz();

        $result = $sut->check(15);

        $this->assertEquals('FizzBuzz', $result);
    }

    public function testNumberNotDivBy3And5ReturnNumber()
    {
        $sut = new FizzBuzz();

        $result = $sut->check(13);

        $this->assertSame('13', $result);
    }
}