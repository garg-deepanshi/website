<?php
include 'common.php';

$email=$_SESSION['email'];
 $select_query="SELECT item_id from users_items where user_id='$email' ";
  $user_id = "select user_id from users where email = '$email' and password = '$password'";
$select_query_result=mysqli_query($con,$select_query,)or die(mysqli_error($con));
$dlt = "DELETE FROM `users_items` WHERE `item_id` = 'item_id' ";
$select_query_results=mysqli_query($con,$dlt,)or die(mysqli_error($con));
header("Location: cart.php");
