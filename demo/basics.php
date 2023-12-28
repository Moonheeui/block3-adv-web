<style>
    /* p:nth-child(odd) {
        background-color: #FFCC70;
    } */

    .odd {
        background-color: #FFCC70;
    }

    /* p:nth-child(even) {
        background-color: #CDFAD5;
    } */

    .even {
        background-color: #CDFAD5;
    }

    .note {
        background-color: #ddd;
    }
</style>


<p class="note">
    variables, data types, operators, expressions, statements, functions, arrays,
    loops, conditionals, outputiing data, objects, classes, inheritance, polymorphism, encapsulation, and namespaces.
</p>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


########  Variables  ############################

$firstName = "moonhee";
// echo "First Name: $firstName";
$x = 14;
$y = 2;
// try {
//     echo $x $ $y;       // using /: even and odd number, look at the last digit (1 or 0)
// } catch (Exception $e) {
//     echo 'Caught exception: ',  $e->getMessage(), "\n";  // Caught exception: Undefined variable: $y
// } finally {

// }

// echo $x % $y;       // using %: even and odd number, look at the remainder (last digit, 1 or 0)

if ($x % $y) {
    echo "$x is Odd";
} else {
    echo "$x is Even";
}

$sampleArray = array(1, 2, 3, "red", "green", "blue");
// print_r($sampleArray);
// echo "<br/><br/>";


// Loop

for ($i = 0; $i < 10; ++$i) {
    // $addOne = $i + 1;
    // echo "index $i contains: $addOne<br/>";
}
// ++$i;   // pre-increment

$j = 0;
while ($j < 10) {
    // $addOne = $j++;   // post-increment
    $addOne = ++$j;   // pre-increment
    // echo "index $j contains: $addOne<br/>";   // index 1 cintains: 0
}

for ($i = 0; $i < count($sampleArray); $i++) {   //Counts all elements in an array, or something in an object.
    // echo "index $i contains: $sampleArray[$i]<br/>";
}


########  data types  ############################

// $balance = 10;
// echo $balance . "<br/>";


########  functions  ############################

$balance = 10;

function deposit($balance, $amount)
{
    return $balance += $amount;
}

$balance = deposit($balance, 10);
// echo $balance;   // 20


function fname($param1, $param2)
{
    return $param1 + $param2;
}
// echo $param1;  // undefined variable, no global access

$ftest = fname(1, 2);
// echo $ftest;   // 3

?>



<?php
########  styling arrays  ############################
// for styling with %

$sampleArray = array(1, 2, 3, "red", "green", "blue");

for ($i = 0; $i < count($sampleArray); $i++) {
    $class = ($i + 1) % 2 ? "odd" : "even";   // $i + 1: even number, $i: odd number
    // echo $class;
    // echo "<p>index $i contains: $sampleArray[$i]</P>";
    echo "<p class='$class'>index $i contains: $sampleArray[$i]</P>";
}

?>

<?php

$name = "moonhee";
echo $name[3];

?>

<?php

$expr = "jan";
switch ($expr) {
    case "jan":
        echo "january";
        break;
    case "dec":
        echo "december";
        break;
    default:
        echo "enjoy!";
        break;
}
for ($i = 0; $i < 10; ++$i) {
    if ($i % 2) {
        // break;
        continue;
    }
    echo $i;
}

?>

<?php
// create a function that checks if a word is a palindrome, using only basics and continue and break, Remember no string functions!!
?>