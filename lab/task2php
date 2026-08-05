<?php

// 1. Calculate Simple Interest

echo " 1. Simple Interest ";


$principal = 5000;
$rate = 5;
$time = 3;

$simpleInterest = ($principal * $rate * $time) / 100;


echo "Principal Amount: $principal";
echo "Rate of Interest: $rate%";
echo "Time Period: $time years";
echo "Simple Interest: $simpleInterest";


// 2. Check Prime Number

echo "2. Prime Number Check";


$number = 17;
$isPrime = true;


if ($number < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

echo "Number to check: $number";
if ($isPrime) {
    echo "$number is a Prime number";
} else {
    echo "$number is NOT a Prime number";
}


// 3. Calculate Factorial

echo "3. Factorial \n";


$num = 5;
$factorial = 1;


for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "Given Number: $num";
echo "Factorial of $num is: $factorial";


// 4. Sum and Average of Array

echo " 4. Sum and Average of Array ";


$numbers = [10, 20, 30, 40, 50];
$sum = 0;
$count = count($numbers);


for ($i = 0; $i < $count; $i++) {
    $sum += $numbers[$i];
}


$average = $sum / $count;


echo "Array Elements: ";
foreach ($numbers as $value) {
    echo $value . " ";
}
echo "\n";
echo "Total Elements: $count";
echo "Sum of all elements: $sum";
echo "Average of all elements: $average";


// 5. Print Pattern using Nested Loop

echo "5. Pattern ";


$rows = 4;


echo "Pattern:";
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }
    echo ;
}
?>