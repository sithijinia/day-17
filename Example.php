<?php

class Example
{
    public $name='Mahima Zaman';
    private $city= 'Dhaka';
    protected $country='Bangladesh'; //Encapsolation.(property and method k secure korkei encapsolation bola hoy.)
    public $value;
    //magic method ki?example.
//     public function __construct($data)
//    {
//        echo $this->value= $data;
//    }

    public function addition(){
        echo 'In Addition';
//        $this->division();  //own class object

    }

    protected function substraction(){
        echo 'In Substraction';
    }

    private function division(){
        echo 'In division';
    }


}
