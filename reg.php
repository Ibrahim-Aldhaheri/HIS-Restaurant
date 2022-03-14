<?php
include "config.php" ;
if(isset($_POST['Submission'])){

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $phone_number = mysqli_real_escape_string($conn,$_POST['phone_number']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $sql = "INSERT INTO users (username, email, password, phone_number, address, user_type) 
            VALUES ('$username', '$email', '$password', '$phone_number', '$address','U')";


    if(mysqli_query($conn, $sql)){
        header("Location:login.php");
    }
    else{
        header("Location:register.php");
    }

}