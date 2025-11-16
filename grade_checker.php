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
    <button name="submit" type="submit">Check grade</button>
</form>
<?php
if(isset($_POST["submit"])){
    $grade = $_POST["number"];
    if($grade >=80 && $grade <=100){
        echo "A";
    }else if($grade >=70 && $grade <80){
        echo "B";
    } else if($grade >=60 && $grade < 70){
        echo "C";
    } else if($grade >=50 && $grade <60){
        echo "D";
    } else if($grade <50){
        echo "Fail";
    } else{
        echo"Invalid";
    }

}
?>
</body>
</html>
