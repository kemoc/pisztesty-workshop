<?php

class InvalidUserAgeException extends Exception { }

class Rebate
{
    public function check(int $age) : int
    {
        if ($age < 0) {
            throw new InvalidUserAgeException("Age can't be lower than 0.");
        }

        return 50;
    }
}