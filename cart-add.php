<?php
include 'common.php';
$id=$_GET['id'];
$email=$_SESSION['email'];
$user_id = "select userId from users where email='$email' " ;


 $cart ="INSERT INTO users_items(user_id, item_id, status) VALUES('$email', '$id', 'Added to cart')";
        $select_cart=mysqli_query($con, $cart)or die(mysqli_error($con));
        $total_rows=mysqli_num_rows($select_query_result);    
        header("Location: products.php");
?>