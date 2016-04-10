<?php

namespace Application;


class Meat extends Decorator
{

    protected $eat;

    public function __construct(Eat $eat)
    {
        $this->eat = $eat;
    }

    public function getDescription()
    {

        return $this->eat->getDescription() . 'with Meat';
    }

    public function coast()
    {
        return $this->eat->coast() + 9;
    }
}