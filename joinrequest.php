<?php
include("connection.php");
if(isset($_POST["submit"]))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $position=$_POST['position'];


    $sql="insert into joinrequest(name,email,phone,position) 
        values('$name','$email','$phone','$position') ";
    if(mysqli_query($db, $sql))
    {
        echo"<script>alert('new record inserted')</script>";
    }
    else
    {
        echo "error".mysqli_error( $db);
    }
    mysqli_close($db);

}
?>