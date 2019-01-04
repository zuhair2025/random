<?php

function abc($a){

$arr=[-5,-3,1,2,2,4,5,9,10];

for($i=0;$i<count($arr);$i++){
    while($arr[$i]==$a){
        
        echo "position is $i";
        $i++;
        
    }
}

}
abc(-5);