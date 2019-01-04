<?php

function abc($a){

$arr=array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,11,12)
    );


for($i=0;$i<count($arr);$i++){
    for($j=0;$j<count($arr,1);$j++){
        if($arr[$i][$j]==$a){
            echo "Row is $i column is $j";
        }
    }
}

}
abc(12);