<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%s\n%s\n%s\n%s\n",$firstname,$lastname,$email,$address); // reads number from STDIN


$anika = ["firstname"=>"$firstname",
          "lastname"=>"$lastname",
          "email"=>"$email",
          "address"=>"$address"];

foreach($anika as $key=>$value){

    echo "$key : $value\n";

}


// var_dump($anika);