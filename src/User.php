<?php

class User
{
    private $id;
    private $fullname;

    public function __construct(int $id, string $fullname)
    {
        $this->id = $id;
        $this->fullname = $fullname;
    }

    public function id() : int
    {
        return $this->id;
    }

    public function fullname() : string
    {
        return $this->fullname;
    }
}