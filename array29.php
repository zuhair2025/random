<?php
// 
$array=["priyo",1971,1952,"zuhair"];

$array[]=42;

//
$priyo = [1,2,3,4,5];

var_dump($priyo);//print the array

//Delete all the value of the array
foreach($priyo as $key=>$value){
    unset($priyo[$key]);
}

var_dump($priyo);

//insert a value into the array
$priyo=array_values($priyo);
$priyo[]=10;
var_dump($priyo);

//insert another value into the array
// $priyo[]=9;
// var_dump($priyo);

$arr1 = array(2,3);
$arr2 = $arr1;

$arr2[]= 5;

$arr3=&$arr1;

$arr3[]=4;



var_dump($arr1);
var_dump($arr2);
var_dump($arr3);