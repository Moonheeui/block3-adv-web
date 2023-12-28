<!-- Palindrome Words -->
<!-- kayak, taco cat, racecar, level, madam, minim, pop -->

<?php

// echo "demo" . "delta";

// $phaseToTest = "ad   a";

$phaseToTest = "taco.....cat.";

// have 2 variables to keep track of phase forwards and backwards
$forwards = "";
$backwards = "";

// populate my 2 variables - use a loop
// check for spaces
// ignore or skip

for ($i = 0; $i < strlen($phaseToTest); $i++) {
    // echo $phaseToTest[$i];

    // $forwards .= $phaseToTest[$i];
    // if ($phaseToTest[$i] == " " || $phaseToTest[$i] == ".") {
    // echo "skip";
    // } else {
    //     $forwards .= $phaseToTest[$i];   // . is concatenation, add to the end of the string
    //     $forwards = $forwards . $phaseToTest[$i];
    //     $x = $x + 2;
    //     $x += 2;
    // }
    // if ($phaseToTest[$i] != " " && $phaseToTest[$i] != ".") {
    //     $forwards .= $phaseToTest[$i];
    // }
    if (!($phaseToTest[$i] == " " || $phaseToTest[$i] == ".")) {
        $forwards .= $phaseToTest[$i];
    }
}
echo $forwards;

for ($i = strlen($phaseToTest) - 1; $i >= 0; $i--) {
    if (!($phaseToTest[$i] == " " || $phaseToTest[$i] == ".")) {
        $backwards .= $phaseToTest[$i];
    }
}
echo $backwards, "<br>";

if ($forwards == $backwards) {
    echo "Palindrome!", "<br><br>";
} else {
    echo "Not Palindrome", "<br><br>";
}


// compare the 2 new variables

// compare from the front and from the back simultaneously
// keep track of my front index
// keep track of my back index separately

// $iFront = 0;
$backIndex = strlen($phaseToTest) - 1;

for ($i = 0; $i < strlen($phaseToTest); $i++) {
    // strlen() is a function that returns the length of a string
    // while I have a space or a period, skip to the next index
    while ($phaseToTest[$i] == " " || $phaseToTest[$i] == ".") {
        $i++;
    }
    // echo $backIndex;
    $backIndex--;   // decrement the back index

}

?>


<!-- taco   ..ca.
    i=0 t b=12 .
    i=1 a b=11 t
    i=2 c b=10 a
    i=3 o b=9  c
    i=4 _ b=8 .    // skip, go to the next iteration
    i=5 _ b=7 .
    i=6 . b=6 _ -->