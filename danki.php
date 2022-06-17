<?php

include('../dbconnect/db.php');

if (isset($_POST['submitRegister'])){
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $query=mysqli_query($connection, "INSERT INTO users (firstname, lastname, email, mobile, password) VALUES ('$firstname','$lastname','$email','$mobile','$password')");
    echo 'dang ki thanh cong';
    header('location:../home.php');
}
?>