<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">

        <?php
        
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
            echo "
            
            <center><img src='customer_images/$customer_image'  class='img-responsive'></center>
        <br>

        <h3 align='center' class='panel-title''>$customer_name</h3>
            
            ";
            
        }
        
        ?>

    </div>

    <div class="panel-body">

        <ul class="nav nav-pills nav-stacked">
            <li class="<?php if(isset($_GET['my_orders'])) {echo " active "; } ?>">
                <a href="my_account.php?my_orders"><i class="fas fa-cart-plus"></i> My Order List</a>
            </li>
            <li class="<?php if(isset($_GET['profile'])) {echo " active "; } ?>">
                <a href="my_account.php?profile"><i class="fas fa-user-edit"></i> Profile</a>
            </li>



            <li class="<?php if(isset($_GET['edit_account'])) {echo " active "; } ?>">
                <a href="my_account.php?edit_account"><i class="fas fa-user-edit"></i> Edit Account</a>
            </li>

            <li class="<?php if(isset($_GET['pay_offline'])) {echo " active "; } ?>">
                <a href="my_account.php?pay_offline"><i class="fab fa-cc-amazon-pay"></i> Pay Offline</a>
            </li>
            <li class="<?php if(isset($_GET['chat'])) {echo " active "; } ?>">
                <a href="my_account.php?chat"><i class="fas fa-trash"></i> Chat</a>
            </li>

            <li class="<?php if(isset($_GET['change_pass'])) {echo " active "; } ?>">
                <a href="my_account.php?change_pass"><i class="fas fa-unlock-alt"></i> Change Password</a>
            </li>

            <li class="<?php if(isset($_GET['delete_account'])) {echo " active "; } ?>">
                <a href="my_account.php?delete_account"><i class="fas fa-trash"></i> Delete Account</a>
            </li>

            <li>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>

        </ul>



    </div>

</div>
