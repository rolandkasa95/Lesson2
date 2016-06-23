<?php

class Car
{
    public $color;
    public $type;

    /**
     * @param $color
     * @return $this
     */
    public function setColor($color){
        $this->color = $color;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getColor(){
        return $this->color;
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
}