<?php

$customer_session = $_SESSION['customer_email'];
$get_customer = "SELECT * FROM customers WHERE customer_email='$customer_session'";
$run_customer = mysqli_query($con, $get_customer);
$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];
$customer_name = $row_customer['customer_name'];
$customer_email = $row_customer['customer_email'];
$customer_country = $row_customer['customer_country'];
$customer_city = $row_customer['customer_city'];
$customer_zipcode = $row_customer['customer_zipcode'];
$customer_gender = $row_customer['customer_gender'];
$customer_contact = $row_customer['customer_contact'];
$customer_address = $row_customer['customer_address'];
$customer_image = $row_customer['customer_image'];



?>


    <h1 align="center"> Edit Your Account </h1>

    <form action="" method="post" enctype="multipart/form-data">


        <div class="form-group">
            <div class="col-md-6">
                <label for="">Full Name</label>

                <input type="text" class="form-control" name="c_name" required placeholder="Enter Your Name" value="<?php echo $customer_name; ?>">

            </div>
            <div class="col-md-6">
                <label for="">Email</label>
                <input type="email" class="form-control" name="c_email" required placeholder="Enter Your Email" value="<?php echo $customer_email; ?>">

            </div>

        </div>

        <p id="text"></p>
        <div class="form-group">
            <div class="col-md-6">
                <label for="">Country</label>
                <input type="text" class="form-control" name="c_country" value="<?php echo $customer_country; ?>" required placeholder="Enter Your County">

            </div>

            <div class="col-md-6">
                <label for="">City</label>
                <input type="text" class="form-control" name="c_city" value="<?php echo $customer_city ?>" required placeholder="Enter Your City">
            </div>

        </div>

        <div class="form-group">
            <div class="col-md-6">
                <label for="">Enter Mobile No</label>
                <input type="text" class="form-control" name="c_contact" value="<?php echo $customer_contact; ?>" required placeholder="Enter Mobile No">
            </div>
            <div class="col-md-6">
                <label for="">Gender</label>
                <input type="text" class="form-control" name="c_gender" value="<?php echo $customer_gender; ?>" required placeholder="Enter Your Gender">

            </div>

        </div>


        <div class="form-group">
            <div class="col-md-6">
                <label for="">Address</label>
                <input type="text" class="form-control" name="c_address" value="<?php echo $customer_address; ?>" required placeholder="Enter Your Address">

            </div>


        </div>

        <div class="form-group">
            <div class="col-md-6">
                <label for="">Zip Code</label>
                <input type="text" class="form-control" value="<?php echo $customer_zipcode; ?>" name="c_zipcode" required placeholder="Enter Your Zipcode">
            </div>

            <div class="col-md-6">
                <label for="">Image</label>
                <input type="file" name="c_image" class="form-control" required><br>
                <img src="customer_images/<?php echo $customer_image; ?>" width="100" height="100" class="img-responsive">

            </div>



        </div>


        <div class="text-center">


            <button name="update" class="btn btn-warning">

<i class="fa fa-user-md" ></i> Update Now

</button>


        </div>



    </form>


    <?php

        if(isset($_POST['update'])){

            $update_id = $customer_id;
            $c_name = $_POST['c_name'];
            $c_email = $_POST['c_email'];
            $c_country = $_POST['c_country'];
            $c_city = $_POST['c_city'];
            $c_zipcode = $_POST['c_zipcode'];
            $c_gender = $_POST['c_gender'];
            $c_contact = $_POST['c_contact'];
            $c_address = $_POST['c_address'];
            $c_image = $_FILES['c_image']['name'];
            $c_image_tmp = $_FILES['c_image']['tmp_name'];

            move_uploaded_file($c_image_tmp,"customer_images/$c_image");

            $update_customer = "update customers set customer_name='$c_name',customer_email='$c_email',customer_country='$c_country',customer_city='$c_city',customer_contact='$c_contact',customer_address='$c_address',customer_zipcode='$c_zipcode', customer_gender='$c_gender',customer_image='$c_image' where customer_id='$update_id'";

            $run_customer = mysqli_query($con,$update_customer);
            if($run_customer){
            echo "<script>alert('Your account has been updated please login again')</script>";
            echo "<script>window.open('../logout.php','_self')</script>";

}

}


?>
