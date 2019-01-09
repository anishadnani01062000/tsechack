<?php
    $conn = new mysqli('localhost', 'root', '', 'final');
    $user_name=$_POST['user_name'];
    $password =$_POST['password'];
   
    $sql="INSERT INTO login_data (user_name,password) VALUES ('$user_name','$password')";
if($conn->query($sql) === TRUE)
    echo"successfully inserted";
    else
    echo "failed";
?>