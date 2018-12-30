<?php
$str = "23, 44, 70, 25, 90, 17"; //input string

$j=0; //initialize the variable

$arr = explode(',',$str);

for($i=0;$i<count($arr);$i++){
    $j = $j+$arr[$i]; //sum of all values
}

$average = $j/count($arr); //average

echo round($average,2); //output of the average

