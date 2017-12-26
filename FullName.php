<?php


class FullName
{
function makeFullName($firstName,$lastName){
    $fullName=$firstName.' '.$lastName;
    return $fullName;
}
function myCalculator($data){
    echo '<pre>';
    print_r($data);
    $btn= $data['btn'];
    switch ($btn){

        case '+':
            $result= $data['firstNumber'] + $data['secondNumber'];
            break;


        case '-':
            $result=$data['firstNumber'] - $data['secondNumber'];
            break;

        case '*':
            $result=$data['firstNumber'] * $data['secondNumber'];
            break;

        case '/':
            $result=$data['firstNumber'] / $data['secondNumber'];
            break;

        case '%':
            $result=$data['firstNumber'] % $data['secondNumber'];
            break;

    }
    return $result;


}

}