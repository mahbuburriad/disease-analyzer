
<?php
session_start();

if(!isset($_SESSION['customer_email'])){
    echo "<script>alert('Please Login to go to your account. If you have not user account Please register and it is more fun to buy here. Thank you!')</script>";
    echo "<script>window.open('../checkout.php', '_self')</script>";
}
else{    

include("../../assets/includes/connection.php");
include("../../assets/function/function.php");

        $customer_session = $_SESSION['customer_email'];
        $get_customer = "select * from customers where customer_email='$customer_session'";
        $run_customer = mysqli_query($con,$get_customer);
        $row_customer = mysqli_fetch_array($run_customer);
        $customer_image = $row_customer['customer_image'];
        $customer_name = $row_customer['customer_name'];
        $customer_email = $row_customer['customer_email'];
        $customer_country = $row_customer['customer_country'];
        $customer_city = $row_customer['customer_city'];
        $customer_gender = $row_customer['customer_gender'];
        $customer_zipcode = $row_customer['customer_zipcode'];
        $customer_address = $row_customer['customer_address'];
        $customer_contact = $row_customer['customer_contact'];
        if(!isset($_SESSION['customer_email'])){

        }
        else{
    
        
        ?>
        
        <!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Medicus | My Orders</title>
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="styles/framework.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>
<body>
<div id="page-transitions" class="page-build light-skin highlight-blue">
<div id="menu-hider"></div>
<div id="menu-list" data-selected="menu-components" data-load="menu-list.html" data-height="415" class="menu-box menu-load menu-bottom"></div>
<div id="menu-demo" data-load="menu-demo.html" data-height="210" class="menu-box menu-load menu-bottom"></div>
<div id="menu-find" data-load="menu-find.html" data-height="420" class="menu-box menu-load menu-bottom"></div>
<div class="header header-scroll-effect">
<div class="header-line-1 header-hidden header-logo-app">
<a href="#" class="back-button header-logo-title">Back to Components</a>
<a href="#" class="back-button header-icon header-icon-1"><i class="fa fa-angle-left"></i></a>
<a href="#" data-menu="menu-find" class="header-icon header-icon-3"><i class="fa fa-search"></i></a>
<a href="#" data-menu="menu-list" class="header-icon header-icon-4"><i class="fa fa-bars"></i></a>
<a href="#" data-menu="menu-demo" class="header-icon header-icon-2"><i class="fa fa-cog"></i></a>
</div>
<div class="header-line-2 header-scroll-effect">
<a href="#" class="header-pretitle header-date color-highlight"></a>
<a href="#" class="header-title">My Orders</a>
<a href="#" data-menu="menu-list" class="header-icon header-icon-1"><i class="fa fa-bars"></i></a>
<a href="#" data-menu="menu-find" class="header-icon header-icon-2"><i class="fa fa-search"></i></a>
<a href="#" data-menu="menu-demo" class="header-icon header-icon-3"><i class="fa fa-cog"></i></a>
</div>
</div>
<div class="page-content header-clear-medium">
<div class="content">
<p>
Here is your order list that you did before. if you pay by bkash or other operator please comfirm us to give us the code
</p>
<div class="decoration bottom-0"></div>
</div>
<div class="content">
       
      <table class="table-borders-light shadow-small">
<tr>
<th class="bg-highlight color-white">Due Amount</th>
<th class="bg-highlight color-white">Invoice No</th>
<th class="bg-highlight color-white">Status</th>
<th class="bg-highlight color-white">Payment</th>

</tr>
<?php
            $customer_session= $_SESSION['customer_email'];
            $get_customer = "SELECT * FROM customers WHERE customer_email='$customer_session'";
            $run_customer = mysqli_query($con, $get_customer);
            $row_customer = mysqli_fetch_array($run_customer);
            
            $customer_id = $row_customer['customer_id'];
            $get_order = "SELECT * FROM customer_orders WHERE customer_id = '$customer_id' ORDER BY order_id DESC";
            $run_orders = mysqli_query($con, $get_order);
            
            $i=0;
            while($row_orders = mysqli_fetch_array($run_orders)){
                $order_id = $row_orders['order_id'];
                $due_amount = $row_orders['due_amount'];
                $invoice_no = $row_orders['invoice_no'];
                $qty = $row_orders['qty'];
                $size = $row_orders['size'];
                $order_date = substr($row_orders['order_date'],0,11);
                $order_status = $row_orders['order_status'];
                $i++;
                if($order_status=='pending'){
                    $order_status = "Unpaid";
                }
                else
                {
                    $order_status = "Paid";
                }

            ?>

                <tr>
                <td class="bg-highlight">
                        <?php echo $invoice_no; ?>
                    </td>

         
                    <td>
                        <?php echo $due_amount; ?>
                    </td>
                    
  
                    <td>
                        <?php echo $order_status; ?>
                    </td>
                    <?php 
                    if($order_status == 'Paid'){
                        echo "
                    <td>Thank you</td>";
                    }
                    else{
                        echo"
                    
                    <td><a href='confirm.php?order_id=$order_id' target='blank' class='btn btn-warning btn-sm'> Confirm If Paid</a></td>
                    ";}?>
                

                </tr>
                <?php } ?>
</table>

</div>
<div class="footer">
<a href="#" class="footer-logo"></a>
<p class="footer-text">There's nothing that comes close to Apptastic<br> It's the best Mobile Template on Envato</p>
<div class="footer-socials">
<a href="#" class="scale-hover icon icon-round no-border icon-xs bg-facebook border-teal-3d"><i class="fab fa-facebook-f"></i></a>
<a href="#" class="scale-hover icon icon-round no-border icon-xs bg-twitter"><i class="fab fa-twitter"></i></a>
<a href="#" class="scale-hover icon icon-round no-border icon-xs bg-google"><i class="fab fa-google-plus-g"></i></a>
<a href="#" class="scale-hover icon icon-round no-border icon-xs bg-phone"><i class="fa fa-phone"></i></a>
<a href="#" data-menu="menu-share" class="scale-hover icon icon-round no-border icon-xs bg-teal-dark"><i class="fa fa-retweet font-15"></i></a>
<a href="#" class="scale-hover icon icon-round no-border icon-xs back-to-top bg-blue-dark"><i class="fa fa-angle-up font-16"></i></a>
</div>
<p class="footer-copyright">Copyright &copy; Enabled <span id="copyright-year">2017</span>. All Rights Reserved.</p>
</div>
</div>
<a href="#" class="back-to-top-badge back-to-top-small bg-highlight"><i class="fa fa-angle-up"></i>Back to Top</a>
<div id="menu-share" data-height="420" class="menu-box menu-bottom">
<div class="menu-title">
<span class="color-highlight">Just tap to share</span>
<h1>Sharing is Caring</h1>
<a href="#" class="menu-hide"><i class="fa fa-times"></i></a>
</div>
<div class="sheet-share-list">
<a href="#" class="shareToFacebook"><i class="fab fa-facebook-f bg-facebook"></i><span>Facebook</span><i class="fa fa-angle-right"></i></a>
<a href="#" class="shareToTwitter"><i class="fab fa-twitter bg-twitter"></i><span>Twitter</span><i class="fa fa-angle-right"></i></a>
<a href="#" class="shareToLinkedIn"><i class="fab fa-linkedin-in bg-linkedin"></i><span>LinkedIn</span><i class="fa fa-angle-right"></i></a>
<a href="#" class="shareToGooglePlus"><i class="fab fa-google-plus-g bg-google"></i><span>Google +</span><i class="fa fa-angle-right"></i></a>
<a href="#" class="shareToPinterest"><i class="fab fa-pinterest-p bg-pinterest"></i><span>Pinterest</span><i class="fa fa-angle-right"></i></a>
<a href="#" class="shareToWhatsApp"><i class="fab fa-whatsapp bg-whatsapp"></i><span>WhatsApp</span><i class="fa fa-angle-right"></i></a>
<a href="#" class="shareToMail no-border bottom-5"><i class="fas fa-envelope bg-mail"></i><span>Email</span><i class="fa fa-angle-right"></i></a>
</div>
</div>
</div>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
</html>


<?php }}?>