<style>
    p:nth-child(odd) {
        background-color: #FFCC70;
    }

    p:nth-child(even) {
        background-color: #CDFAD5;
    }
</style>

<!-- variables, data types, functions, loops, arrays, contidtional, outputting data, operators -->


<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$firstName = "peter";
// echo "First Name: $firstName";
$x = 14;
$y = 2;

// echo $x % $y;
// echo $x & $y;
if ($x % $y) {
    echo "$x is Odd";
} else {
    echo "$x is Even";
}

$sampleArray = array(1, 2, 3, "red", "blue", "green");
print_r($sampleArray);
echo "<br/>";

for ($i = 0; $i < 10; ++$i) {
    // $addOne = $i + 1;
    // echo "index $i contains: $addOne<br/>";
}

$j = 0;
while ($j < 10) {
    $addOne = ++$j;
    // echo "index $j contains: $addOne<br/>";
    // $j++;
}

for ($i = 0; $i < count($sampleArray); $i++) {
    // echo "index $i contains: $sampleArray[$i]<br/>";
}

$balance = 10;

function deposit($balance, $amount)
{
    return $balance += $amount;
}

$balance = deposit($balance, 10);
// echo $balance;

function fname($param1, $param2)
{
    return $param1 + $param2;
}
// echo $param1;   // this will not work! No global access to function variables

$ftest = fname(1, 2);
// echo $ftest;

?>

<?php
// for styling wih %

$sampleArray = array(1, 2, 3, "red", "blue", "green");

for ($i = 0; $i < count($sampleArray); $i++) {
    // $class = ($i + 1) % 2 ? "odd" : "even";  
    $class = $i % 2 ? "odd" : "even";    // background-color: #ddd;
    // echo $class;
    echo "<p class='$class'>index $i contains: $sampleArray[$i]</p>";
}
?>

<?php

$name = "peter";
echo $name[2];

?>

<?php

$expr = "oct";
switch ($expr) {
    case "jan";
        echo "January";
        break;
    case "dec";
        echo "December";
        break;
    default:
        echo "Enjoy!";
        break;
}

// for ($i = 0; $i < 10; ++$i) {
//     if ($i % 2) {
//         continue;   // or break;
//     }
//     echo $i;
// }


?>


<?php

// create a function that checks if a word is a palindrome, using only basics and continue and break, Remember no string functions!!

$word = "racecar";

function isPalindrome($word)
{
    $word = strtolower($word);
    $word = str_replace(" ", "", $word);

    $length = strlen($word);
    $half = floor($length / 2);

    for ($i = 0; $i < $half; $i++) {
        if ($word[$i] != $word[$length - $i - 1]) {
            return false;
        }
    }
    return true;
}


echo isPalindrome("racecar") ? "Racecar is a palindrome." : "Racecar is not a palindrome.";


?>