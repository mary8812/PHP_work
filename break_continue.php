<?php
for($num = 0; $num<=10; $num++){
    if($num == 5){
        continue;
    }
    echo $num."<br>";
    if($num ==8){
        break;
    }
}
?>