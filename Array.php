<?php
$personal = array(
"name" => "Mary",
"Age" => 50,
"Country"=> "Rwanda"
);
foreach( $personal as $key=> $value){
    echo $key. ":" .$value. "<br>";
}
 echo "<br>";
$students = array(
    array("Mary",20,"A"),
    array("Christa",30,"B"),
    array("Kethia",40,"A+")
);
foreach($students as $student){
    echo "Name:".$student[0]." |age:".$student[1]."| Grade:".$student[2]."<br>";
}






