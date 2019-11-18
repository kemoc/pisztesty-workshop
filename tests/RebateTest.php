<?php

use \PHPUnit\Framework\TestCase;

final class RebateTest extends TestCase
{
    /**
     * @dataProvider agesLowerThanZero
     */
    public function test_check_minusAge_trowException($age)
    {
        $rebate = new Rebate();

        $this->expectException(InvalidUserAgeException::class);

        $rebate->check($age);
    }

    public function agesLowerThanZero()
    {
        return [
            [-1], [-10], [-100]
        ];
    }
}
