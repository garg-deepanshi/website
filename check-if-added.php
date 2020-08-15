<!DOCTYPE html>
<html>
    <head>
        <title>
            check in cart
        </title>
        
    </head>
    <body>
     <?php
      include 'common.php';

function check_if_added_to_cart($con,$item_id) {
    $email=$_SESSION['email'];
    //$item_id="select item_id from users_items where users_id='$email' ";
   
  //  $user_products_query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$email' and status='Added to cart'";
    $user_products_query="SELECT item_id FROM users_items WHERE user_id ='$email' and status='Added to cart'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    
   while($row=mysqli_fetch_array($user_products_result)){
   // $number_of_products=mysqli_num_rows($user_products_result);
     if ($row['item_id']!=$item_id) {
    return 0;
  }
  else{
      return 1;
  }
}
}
    
   
        ?>
    </body>

</html>