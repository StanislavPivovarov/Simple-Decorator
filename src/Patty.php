<?php

namespace Application;

class Patty extends Eat
{

    public function __construct()
    {
        $this->setDescription('patty');
    }

    public function coast()
    {
        return 11;
    }
}