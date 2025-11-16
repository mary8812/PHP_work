<?php
$num = 20;
$num2 = 30;
if($num > 10){
    goto label;
}
echo "The number is less than 10";


label:
echo "The number is greater than 10";
if($num2 > 10){
    goto label;
}
echo "The number is less than 10";


label:
echo "The number is greater than 10";
?>