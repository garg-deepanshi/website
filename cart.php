<html>
    <head>
        <title>
           Cart
        </title>
        <?php
        include 'common.php';
        ?>
         <?php
        include 'header.php';
        ?>
         <?php
        include 'fotter.php';
        ?>
        <?php
       // require 'products.php';
        ?>
    </head>
    <body><br><br><br>
        <?php
        $email=$_SESSION['email'];
                $select_query="SELECT item_id from users_items where user_id='$email' ";
                $select_query_result=mysqli_query($con,$select_query,)or die(mysqli_error($con));
               
        ?>
    <center>
        <div class="container">
             <div class="row">
                <div class="col-lg-12">
                    <h2>Items in Cart</h2>
                </div>
            </div>
            <?php while($row=mysqli_fetch_array($select_query_result)){ ?>
           
             <div class="row">
                <div class="col-lg-12">
                    <h4>Item Number</h4>
                </div>
                 <div class="col-xs-10">
                     <?php echo $row['item_id']; ?>
                 </div>
            </div>
            
            
            <div><a href="confirm.html" class="btn btn-primary">Confirm Order</a>
            <a href="cart-remove.php" class="btn btn-primary">Remove Order</a></div>
            
            
            <?php }  ?>
        </div>
        </center>
         <?php
                       
                        ?>
                       
    </body>
</html>

