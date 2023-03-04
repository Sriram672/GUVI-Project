<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="project";
    
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "Connection Failed" .mysqli_connect_error();
        exit;
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql="select * from register where username='$username'and password='$password' ";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error" .mysqli_error($conn);
        exit;
    }
    $row=mysqli_fetch_assoc($result);
    if($row){
        header("Location:profile.html");
    }
    else{
        echo "Your mobile no or password maybe incorrect,Try again.";
    }
    mysqli_close($conn);
    ?>