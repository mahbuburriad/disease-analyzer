<?php
session_start();

 


    if(!isset($_SESSION['customer_email']))
    { echo "
    <script>
        alert('Please Login to go to your account. If you have not user account Please register and it is more fun to buy here. Thank you!')

    </script>";
     echo "
    <script>
        window.open('../checkout.php', '_self')

    </script>"; }
else{
    include("../includes/connection.php");
    include("../functions/functions.php");

    if(isset($_GET['order_id']))
    { $order_id = $_GET['order_id']; } ?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/logo-small.PNG">

        <title>ShopCart ! E-Commerce Store</title>


        <link href="https://fonts.googleapis.com/css?family=Roboto:400, 500, 700, 300, 100" rel="stylesheet">
        <link rel="stylesheet" href="../styles/bootstrap.min.css">
        <link rel="stylesheet" href="../font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.min.js"></script>


    </head>

    <body>

        <div id="top">
            <!--top starts-->

            <div class="container">
                <!--container starts-->

                <div class="row">
                    <!--row starts-->

                    <div class="col-md-6 login-details">
                        <!-- col-md-6 login-details starts-->
                        <a href="#" class="btn btn-primary btn-sm">

                            <?php
    
    if(!isset($_SESSION['customer_email'])){
        echo "Welcome:Guest";
    }
else
{
    echo "Hello! ".$_SESSION['customer_email']."";
}
                            ?>
                        </a>

                        <a href="#">Shopping Cart Total Price: <?php total_price();?>/=, Total Items <?php items(); ?></a>

                    </div>
                    <!-- col-md-6 login-details ends-->

                    <div class="col-md-6">
                        <!-- col-md-6  starts-->

                        <ul class="menu">
                            <!--menu starts-->

                            <li><a href="../customer_register.php">Registers</a></li>
                            <li>
                                <?php
                            if(!isset($_SESSION['customer_email'])){
                                echo "<a href='checkout.php'>My Account</a>";
                            }
                            else
                            {
                                echo "<a href='customer/my_account.php?my_orders'>CheckOut</a>";
                            }
                            ?></li>
                            <li><a href="../cart.php">Go to Cart</a></li>
                            <li>
                                <?php
                            if(!isset($_SESSION['customer_email'])){ echo "<a href='../checkout.php'>Sign in</a>"; } else{ echo "<a href='../logout.php'>Sign out</a>"; }
                            
                            ?>


                            </li>

                        </ul>
                        <!--menu ends-->
                    </div>
                    <!-- col-md-6 ends-->
                </div>
                <!-- row ends-->

            </div>
            <!--container ends-->

        </div>
        <!--top ends-->

        <div class="navbar navbar-default" id="navbar">

            <div class="container">


                <div class="navbar-header">


                    <a class="navbar-brand home" href="../index.php">
                   

                    <img src="../images/logo-large.PNG"  class="hidden-xs">
                    <img src="../images/logo-small.png"  class="visible-xs">

                </a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                <span class="sr-only" >Toggle Navigation </span>

                <i class="fa fa-align-justify"></i>

            </button>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">

                <span class="sr-only" >Toggle Search</span>

                <i class="fa fa-search" ></i>

            </button>


                </div>


                <div class="navbar-collapse collapse" id="navigation">


                    <div class="padding-nav">


                        <ul class="nav navbar-nav navbar-left">


                            <li>
                                <a href="../index.php"> Home </a>
                            </li>

                            <li>
                                <a href="../shop.php"> Shop </a>
                            </li>

                            <li class="active">
                                <a href="my_account.php"> My Account </a>
                            </li>
                            <li>
                                <a href="../cart.php"> Shopping Cart </a>
                            </li>
                            <li>
                                <a href="../contact.php"> Contact Us</a>
                            </li>
                            <li>
                                <a href="../app/shopcart.apk">Site APP</a>
                            </li>

                        </ul>




                    </div>

                    <a class="btn btn-primary navbar-btn right" href="../cart.php">
                   

                    <i class="fa fa-shopping-cart"></i>
                    <span><?php items(); ?> items in Cart</span>
                </a>

                    <div class="navbar-collapse collapse right">


                        <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

<span class="sr-only">Toggle Search</span>

<i class="fa fa-search"></i>

</button>

                    </div>


                    <div class="collapse clearfix" id="search">


                        <form class="navbar-form" method="get" action="results.php">


                            <div class="input-group">


                                <input class="form-control" type="text" placeholder="Search" name="user_query" required>

                                <span class="input-group-btn">

<button type="submit" value="Search" name="search" class="btn btn-primary">

<i class="fa fa-search"></i>

</button>
        </span>

                            </div>

                        </form>

                    </div>

                </div>


            </div>
        </div>



        <div id="content">

            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">

                        <li><a href="index.php">Home</a></li>
                        <li>My Account</li>

                    </ul>

                </div>


                <div class="col-md-3">

                    <?php
                
                include("includes/sidebar.php");
                
                ?>


                </div>







                <div class="col-md-9">
                    <div class="box">
                        <?php/*
            $customer_session= $_SESSION['customer_email'];
            $get_customer = "SELECT * FROM customers WHERE customer_email='$customer_session'";
            $run_customer = mysqli_query($con, $get_customer);
            $row_customer = mysqli_fetch_array($run_customer);
            $customer_id = $row_customer['customer_id'];
    
            $get_o_order = "SELECT * FROM customer_orders WHERE customer_id = '$customer_id' AND order_id='$order_id'";
            $run_o_orders = mysqli_query($con, $get_o_order);
            $row_o_orders = mysqli_fetch_array($run_o_orders);
    $order_ids= $row_o_orders['order_id'];
    
    
    
    $get_p_order = "SELECT * FROM pending_orders WHERE customer_id = '$customer_id' AND order_id='$order_ids'";
            $run_p_order = mysqli_query($con, $get_p_order);
            $row_p_order = mysqli_fetch_array($run_p_order);
            $invoice_no = $row_p_order['invoice_no'];
    
            $get_order = "SELECT * FROM customer_orders WHERE invoice_no = '$invoice_no'";
            $run_orders = mysqli_query($con, $get_order);
            while($row_orders = mysqli_fetch_array($run_orders)){
                $due_amount = $row_orders['due_amount'];*/
            ?>




                            <h1 align="center"> Please Confirm Your Payment </h1>

                            <form action="confirm.php?update_id=<?php echo $order_id;?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="">Invoice No.</label>
                                    <input type="text" class="form-control" name="invoice_no" required>


                                </div>
                                <div class="form-group">
                                    <label for="">Amount Sent</label>
                                    <input type="text" class="form-control" name="amount_sent" required>


                                </div>
                                <div class="form-group">
                                    <label for="">Select Payment Method</label>
                                    <select name="payment_mode" class="form-control" id="">
                              <option >Select Payment Method</option>
                              <option >Visa/Master Card</option>
                              <option>Bkash</option>
                              <option>Dutch Bangla Mobile</option>
                              <option>PayPal</option>
                              <option>Western Union</option>
                          </select>


                                </div>
                                <div class="form-group">
                                    <label for="">Transection/Refference Id</label>
                                    <input type="text" class="form-control" name="ref_no" required value="<?php echo $customer_session; ?>">


                                </div>
                                <div class="form-group">
                                    <label for="">Bkash Code</label>
                                    <input type="text" class="form-control" name="code">


                                </div>
                                <div class="form-group">
                                    <label for="">Payment Date</label>
                                    <input type="text" class="form-control" name="date" required>
                                </div>


                                <div class="text-center">
                                    <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
                               <i class="fas fa-money-bill-alt"></i> Confirm Payment
                               
                           </button>

                                </div>

                            </form>


                            <?php

        if(isset($_POST['confirm_payment'])){

            $update_id = $_GET['update_id'];
            $invoice_no = $_POST['invoice_no'];
            $amount = $_POST['amount_sent'];
            $payment_mode = $_POST['payment_mode'];
            $ref_no = $_POST['ref_no'];
            $code = $_POST['code'];
            $payment_date = $_POST['date'];
            $complete = "Complete";

            $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";

            $run_payment = mysqli_query($con,$insert_payment);
            $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";
            $run_customer_order = mysqli_query($con,$update_customer_order);
            $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";
            $run_pending_order = mysqli_query($con,$update_pending_order);

            if($run_pending_order){

            echo "<script>alert('your Payment has been received,order will be completed within 24 hours')</script>";

            echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}



}



?>



                    </div>


                </div>


            </div>
        </div>


        <?php
    
    include("../includes/footer.php");
    
    ?>



            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/jquery.min.js"></script>

    </body>

    </html>

    <?php } 
 
?>
