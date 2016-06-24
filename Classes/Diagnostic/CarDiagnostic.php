<?php

/**
 * Class CarDiagnostic
 */
class CarDiagnostic
{
    public function __construct($arg,$args)
    {
        $this->$arg = $arg;
        $this->$args = $args;
    }
    
    public function runDiagnostic(){
        return true;
    }
}