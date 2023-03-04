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
    $username=$_POST['username'];                    
    $email=$_POST['email'];
    $password = $_POST['password'];
    $birthday= $_POST['birthday'];
    $tel= $_POST['tel'];

    $sql="insert into customers(username,email,password,birthday,tel)values('$username','$email','$password','$birthday','$tel')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error" .mysqli_error($conn);
        exit;
    }
    else{
        header("Location:login.html");
    }
        mysqli_close($conn);
    ?>