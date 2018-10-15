
    <div style="margin-left: 300px;" class="content-area">

    <h1 style="margin-bottom:10px;">Login Form - Please fill up credintial</h1>
		<!-- Login Page 2 -->
		<div class="login-page-1 login-page-2 container-fluid no-padding">
			<div class="padding-100"></div>
			<div class="left-background"></div>
			<!-- Container -->
			<div class="container">
				<div class="col-md-4 col-sm-6 col-xs-6">
				<center>
					<form action="checkout.php" class="login-form login-form-1" method="post">

            <div class="form-group">
                <label for="">E-mail</label>
                <input type="email" class="form-control" name="c_email" required>

            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="c_pass" required>
            </div>
            <div class="text-center">
                <button name="login" class="btn btn-primary" value="Login">
              <i class="fas fa-sign-in-alt"></i> Sign In
           </button>

            </div>
        </form>
        </center>
        <center>  <button style="margin-top: 20px;" class="btn btn-primary"><a style="color: white;" href="customer_register.php">Dont Have Account? Please Register</a></button></center>
      
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

                echo "<script>window.open('my_account.php?profile','_self')</script>";

                }
                else {

                $_SESSION['customer_email']=$customer_email;

                echo "<script>alert('You are Logged In')</script>";

                echo "<script>window.open('checkout.php','_self')</script>";

                } 


                }

        ?>

				</div>

			</div><!-- Container /- -->
			<div class="padding-100"></div>
		</div>
                    </div><!-- Login Page 2 -->