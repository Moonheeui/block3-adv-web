<?php

// echo "demo" . "delta";

$phaseToTest = "taco   ..cat.";

// have 2 variables to keep track of phase forwards and backwards
$forwards = "";
$backwards = "";

// populate my 2 variables - use a loop
// check for spaces
// ignore or skip
for ($i = 0; $i < strlen($phaseToTest); $i++) {
    // echo $phaseToTest[$i];

    // if($phaseToTest[$i] == " " || $phaseToTest[$i] == ".") {
    // echo "skip";
    // }else{
    //     $forwards .= $phaseToTest[$i];
    //     $forwards = $forwards . $phaseToTest[$i];
    //     $x = $x + 2;
    //     $x += 2;
    // }


    // if ($phaseToTest[$i] != " " && $phaseToTest[$i] != ".") {
    //     $forwards .= $phaseToTest[$i];

    if (!($phaseToTest[$i] == " " || $phaseToTest[$i] == ".")) {
        $forwards .= $phaseToTest[$i];
    }
}
echo $forwards, "front";

for ($i = strlen($phaseToTest) - 1; $i >= 0; $i--) {
    if (!($phaseToTest[$i] == " " || $phaseToTest[$i] == ".")) {
        $backwards .= $phaseToTest[$i];
    }
}
echo $backwards, "back";


// compare the 2 new variables
if ($forwards == $backwards) {
    echo "Palindrome";
}


?>
