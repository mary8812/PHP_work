<?php
  // function Number($a,$b){

  //   return $a+$b;

  // }
  // echo Number(10,3);
   
    
// function gamb(){
//   return "Hello word";

// }
// echo gamb();

// function gamb($a=10){
// for($i=$a;$i>=0;$i--){
// echo $i."<br>";
// }
// }
// echo gamb(5);
// function factorial($n){
//   if($n<=1){
//     return 1;
//   }else{
//     return $n*factorial($n-1);
//   }
// } 
// echo factorial(5);
function addfive(&$num){
  $num +=5;
}
$number =10;
addfive($number);
echo $number;

?>