<?php

class VehicleBase
{
    public $color;
    public $type;
    protected $colorNumber;


    public function __set($name, $value)
    {
        $this->$name=$value;
    }


    /**
     * @param $type
     * @return $this
     */
    public function setType($type){
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $colorNumber
     */
    public function setColorNumber($colorNumber){
        $this->colorNumber = $colorNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getColorNumber(){
        return $this->colorNumber;
    }

    /**
     * @return bool|string
     */
    public function getColorInfo(){
        if ($this->colorNumber && $this->color){
            return $this->color . ": " . $this->colorNumber;
        }
        return false;
    }
    
    public function __call($name, $arguments)
    {
        switch (true){
            case ($this instanceof Car):
                require 'Diagnostic/CarDiagnostic.php';
                $diagnostic = new CarDiagnostic($name, $arguments);
                return $diagnostic->runDiagnostic();
            case ($this instanceof Train):
                require 'Diagnostic/TrainDiagnostic.php';
                $diagnostic = new TrainDiagnostic($name,$arguments);
                return $diagnostic->runDiagnostic();
        }
        return false;
    }
}