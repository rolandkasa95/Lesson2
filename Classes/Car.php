<?php

require_once 'VehicleBase.php';

class Car extends VehicleBase
{
    protected $colorHex;

    /**
     * @return mixed
     */
    public function getColorHex()
    {
        return $this->colorHex;
    }

    /**
     * @param $colorHex
     * @return $this
     */
    public function setColorHex($colorHex)
    {
        $this->colorHex = $colorHex;
        return $this;
    }
    public function getColorInfo(){
        $info = parent::getColorInfo();
        if ($this->colorHex){
            $data['General'] = parent::getColorInfo();
            $date['Hex Value'] = $this->colorHex;
            return $data;
        }
        return $info;
    }

}