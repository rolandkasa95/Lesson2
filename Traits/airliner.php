<?php

trait Airliner{
    public $hasFirstClass = false;
    public $hasBusinessClass = false;
    public $operator;

    public function setHasFirstClass($hasFirstClass)
    {
        $this->hasFirstClass = $hasFirstClass;
        return $this;
    }
}