<div class="page-login content-boxed content-boxed-padding top-0 bottom-0 bg-white">
                        <img class="preload-image login-bg responsive-image bottom-0 shadow-small" src="images/pictures/medications-257336_640.jpg" data-src="images/pictures/medications-257336_640.jpg" alt="img">
                        <img class="preload-image login-image shadow-small" data-src="logos/rsz_1rsz_1logo.png" alt="img">
                        <h1 class="color-black ultrabold top-20 bottom-5 font-30">Login</h1>
                        <p class="smaller-text bottom-15">Hello, stranger! Please enter your credentials below.</p>
                   <form action="checkout.php" method="post">
                        <div class="page-login-field top-15">
                            <i class="fa fa-user"></i>

                            <input type="email" placeholder="Username" name="c_email" required>
                            <em>(required)</em>
                        </div>
                        <div class="page-login-field bottom-15">
                            <i class="fa fa-lock"></i>
                             <input type="password" placeholder="Password"  name="c_pass" required>
                            <em>(required)</em>
                        </div>
                        <div class="page-login-links bottom-20">
                            <a class="forgot float-right" href="customer_register.php"><i class="fa fa-user float-right"></i>Create Account</a>
                            <a class="create float-left" href="#"><i class="fa fa-eye"></i>Forgot Password</a>
                            <div class="clear"></div>
                        </div>
                        
                  <button name="login" class="button button-blue button-icon button-full button-sm shadow-small top-15 button-rounded uppercase ultrabold" value="Login">
              <i class="fas fa-sign-in-alt"></i> Sign In
           </button>
                        
                        </form>

                          <?php

                if(isset($_POST['login'])){

                $customer_email = $_POST['c_email'];

                $customer_pass = $_POST['c_pass'];

                $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

                $run_customer = mysqli_query($con,$select_customer);

                $get_ip = getRealUserIp();

                $check_customer = mysqli_num_rows($run_customer);

                $select_cart = "select * from cart where ip_add='$get_ip'";

                $run_cart = mysqli_query($con,$select_cart);

                $check_cart = mysqli_num_rows($run_cart);

                if($check_customer==0){

                echo "<script>alert('password or email is wrong')</script>";

                exit();

                }

                if($check_customer==1 AND $check_cart==0){

                $_SESSION['customer_email']=$customer_email;

                echo "<script>alert('You are Logged In')</script>";

                echo "<script>window.open('customer/my_account.php','_self')</script>";

                }
                else {
                $_SESSION['customer_email']=$customer_email;
                echo "<script>alert('You are Logged In')</script>";

                echo "<script>window.open('checkout.php','_self')</script>";

                } 


                }

        ?>
                    </div>

        