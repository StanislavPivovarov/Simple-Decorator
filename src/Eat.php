<?php

namespace Application;

abstract class Eat
{

    protected $description;
    protected $coast;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($descr)
    {
        $this->description = $descr;
    }

    public abstract function coast();

}
