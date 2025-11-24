<?php
// $number = 1;
// while($number <=10){
//     echo $number." ,";
//     $number++;
// }

// $sum = 0;
// $count = 0;
// $number = 1;

// while($count < 100 && $number < 98){
//     if($number != 59){
//         $sum += $number;
//     }
//     $number += 2;
//     $count++;
// }

// echo "The sum is: " . $sum;
// This will NOT show an error
// $firstName = "Alice";
// $lastName = "Smith";
// $age = 22;

// echo "My name is $firstName $lastName.<br>";
// echo "I am $age years old.<br>";
// echo "I love learning PHP!";
// $a = 20;
// $b = 6;

// echo "Addition: " . ($a + $b) . "<br>";
// echo "Subtraction: " . ($a - $b) . "<br>";
// echo "Multiplication: " . ($a * $b) . "<br>";
// echo "Division: " . ($a / $b) . "<br>";
// echo "Modulus: " . ($a % $b);

if(isset($_POST['submit'])) {
    $marks = $_POST['marks'];

    if($marks >= 80 && $marks <= 100){
        echo "First Class";
    } elseif($marks >= 70 && $marks <= 79){
        echo "Second Class Upper Division";
    } elseif($marks >= 60 && $marks <= 69){
        echo "Second Class Lower Division";
    } elseif($marks >= 50 && $marks <= 59){
        echo "Pass";
    } else {
        echo "Fail";
    }
}
?>

<form method="post">
    Enter Marks: <input type="number" name="marks">
    <input type="submit" name="submit" value="Check">
</form>


