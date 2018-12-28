<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
// //$line = trim(fgets(STDIN)); // reads one line from STDIN
fscanf(STDIN, "%s\n%s\n%s\n%s\n",$firstname,$lastname,$email,$address); // reads number from STDIN
// fprintf(STDOUT,"N =%d E=%d",$node,$edge);

$anika = ["firstname"=>"$firstname",
          "lastname"=>"$lastname",
          "email"=>"$email",
          "address"=>"$address"];

foreach($anika as $key=>$value){

    echo "$key : $value\n";
    // fprintf(STDOUT,"$key : $value\n");
}


// var_dump($anika);