<?php
 require_once 'Example.php';

class Demo extends Example
{
    public $age = 25;
    protected $location = 'Shankar';
    private $mobile = '01850239089';

    public function newOne (){
//        echo 'In new one';
        $this->addition();
    }


    protected function newTwo (){
        echo 'In new Two';
    }


    private function newThree (){
        echo 'In new Three';
    }


}