
<?php
    require "Connection.php";
    $id= $_GET['delete_id'];
    $query = "delete from users where id= $id";

    if(mysqli_query($conn, $query)) {
        header("location: Display.php");
    }
    else{
        echo "fail";
    }


    ?>


