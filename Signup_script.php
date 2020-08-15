<?php
include'common.php';


$name = mysqli_real_escape_string($con,$_POST['name']);

$email = mysqli_real_escape_string($con,$_POST['email']);
$_SESSION['email']=$email;
$password = mysqli_real_escape_string($con,$_POST['password']);
$contact= mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);

$user_registration_query = "insert into users(name,email,password,contact,city ) values ('$name','$email','$password','$contact','$city')";
//die($user_registration_query);
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
header("Location: products.php");
?>