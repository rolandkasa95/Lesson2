<?php

class TrainDiagnostic
{
    public function __construct($arg, $args)
    {
        $this->$arg = $arg;
        $this->$args = $args;
    }
}