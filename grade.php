<?php
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
