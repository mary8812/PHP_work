<?php
if(isset($_POST['Submit'])){
    $Username =$_POST['Username'];
    $Email =$_POST['Email'];
    $Password =$_POST['Password'];
    $Confirm =$_POST['Confirm'];
};
?>
<form method="POST" action="">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" ><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Confirm Password:</label><br>
    <input type="password" name="confirm" required><br><br>

    <input type="submit" name="submit" value="Sign Up">
</form>