<?php

require_once 'VehicleBase.php';

class Car extends VehicleBase
{
    public $colorHex;

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