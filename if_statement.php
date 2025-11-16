<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <input type="number" name="number" id=""><br>
    <button name="submit" type="submit">Check</button>
</form>
<?php
if(isset($_POST["submit"])){
    $number = $_POST["number"];
    if($number == 0){
        echo "The number is 0";
    } else if($number > 0){
        echo "The number is positive";
    }else{
        echo "The number is negative";
    }
}
?>
</body>
</html>
