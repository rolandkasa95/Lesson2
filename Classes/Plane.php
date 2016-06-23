<?php

require_once 'Car.php';

class Plane extends Car
{
    public $capacity;

    /**
     * @param $capacity
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

}