<!DOCTYPE html>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST">
        <input type="number" name="number" id=""><br>
        <button type="christa" name="christa">Check</button>
</form>   
         <?php
        // if(isset($_POST["christa"])){
        //     $number = $_POST["number"];
        // if($number == 0){
        //         echo "The number is 0";
        // }else if($number > 0){
        //         echo"The number is positive";
        // }else{
        //         echo "The number is negative";
        //     }
        // }
        ?> -->

    
</body>
<!-- </html> -->
 <?php
//  FOR_LOOP
//   $sum=0;
//  for($i=1; $i<=100; $i++){
// $sum += $i;
//  }
//  echo "Sum =".$sum;
// DO_WHILE
// $i = 1;
// do{
//    echo $i. "<br>";
//    $i++;
// }while( $i<=10);

 $personal=["Name"=>"Mary","Age"=>"30","Country"=>"Rwanda"];
 foreach($personal as $key=>$value){
    echo "$key: $value<br>";
 }
 ?>
 


