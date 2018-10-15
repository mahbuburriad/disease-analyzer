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
    include("assets/includes/connection.php");
include("assets/function/function.php");

    if(isset($_GET['order_id']))
    { $order_id = $_GET['order_id']; } ?>



<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Customer Login</title>

	<?php include "assets/includes/header.php" ?>



     
                  <div class="content-area">
		<!-- Login Page 2 -->
		<div class="login-page-1 login-page-2 container-fluid no-padding">
			<div class="padding-100"></div>
			<div class="left-background"></div>
			<!-- Container -->
			<div class="container">
				<div class="col-md-12 col-sm-12 col-xs-12">

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
                                    <button type="submit" name="confirm_payment" class="btn btn-warning btn-lg">
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
    
    include("assets/includes/footer.php");
    
    ?>

    </body>

    </html>

    <?php } 
 
?>
