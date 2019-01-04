<?php

function abc($a){

$arr=[-5,-3,1,2,2,4,5,9,10];

for($i=0;$i<count($arr);$i++){
    if($arr[$i]==$a){
        
        echo "value is $a position is $i";
      
    }
}
}
abc(9);