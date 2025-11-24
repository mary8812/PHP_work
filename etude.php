<?php
// $rows =1;
// for($i =10;$i>=$rows;$i--){
//     for($j = $rows;$j<=$i;$j++){
//         echo "*";
//     }
//     echo "<br>";
// }

// $rows = 10;
// for($i =1;$i<=$rows; $i++){
//     echo str_repeat("&nbsp", $rows - $i);
//     echo str_repeat("*", ($i *2) - 1);
//     echo "<br>";
// }
//   $array1 = ["banana","apple","orrange"];
//  echo $array1[1];
$students = array(
  "Mary"=> 20,
  "Keza"=> 30,
  "Fatia"=> 40
);
foreach($students as $key =>$values){
  echo $key."=".$values."<br>";
}
echo "<hr>";
$arrays = array(
  array("Mary",20,"Rwanda"),
  array("Mary",40,"Rwanda"),
  array("Mary",30,"Rwanda")
);
foreach($arrays as $array){
  echo "Names:".$array[0]."|Age:".$array[1]."|Country:".$array[2]."<br>";
}
echo "<hr>";
$numbers =[1,2,3];
echo count ($numbers);

?>
