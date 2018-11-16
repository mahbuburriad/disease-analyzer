<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login/index.php', '_self')</script>";
}

else{

?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Insert Coupon</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                       <center>
                        <h4 class="card-title">General Form</h4>
                        <h6 class="card-subtitle"> All with bootstrap element classies </h6>

<form class="form-horizontal" method="post" action=""><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label"> Coupon Title </label>

<div class="col-md-6">

<input type="text" name="coupon_title" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label"> Coupon Price </label>

<div class="col-md-6">

<input type="text" name="coupon_price" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label"> Coupon Code </label>

<div class="col-md-6">

<input type="text" name="coupon_code" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label"> Coupon Limit </label>

<div class="col-md-6">

<input type="number" name="coupon_limit" value="1" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label">Select coupon for Product Or bundle</label>

<div class="col-md-6">

<select name="product_id" class="form-control">

<option> Select Coupon Product  </option>

<?php

$get_p = "select * from products where status='product'";

$run_p = mysqli_query($con,$get_p);

while($row_p = mysqli_fetch_array($run_p)){

$p_id = $row_p['product_id'];

$p_title = $row_p['product_title'];

echo "<option value='$p_id'> $p_title </option>";

}

?>

<option></option>

<option>Select Coupon For Bundle</option>

<option></option>

<?php

$get_p = "select * from products where status='bundle'";

$run_p = mysqli_query($con,$get_p);

while($row_p = mysqli_fetch_array($run_p)){

$p_id = $row_p['product_id'];

$p_title = $row_p['product_title'];

echo "<option value='$p_id'> $p_title </option>";

}

?>

</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" class=" btn btn-primary form-control" value=" Insert Coupon ">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->



<?php

if(isset($_POST['submit'])){

$coupon_title = $_POST['coupon_title'];

$coupon_price = $_POST['coupon_price'];

$coupon_code = $_POST['coupon_code'];

$coupon_limit = $_POST['coupon_limit'];

$product_id = $_POST['product_id'];

$coupon_used = 0;

$get_coupons = "select * from coupons where product_id='$product_id' or coupon_code='$coupon_code'";

$run_coupons = mysqli_query($con,$get_coupons);

$check_coupons = mysqli_num_rows($run_coupons);

if($check_coupons == 1){

echo "<script>alert('Coupon Code or Product Already Added Choose another Coupon code or Product')</script>";

}
else{

$insert_coupon = "insert into coupons (product_id,coupon_title,coupon_price,coupon_code,coupon_limit,coupon_used) values ('$product_id','$coupon_title','$coupon_price','$coupon_code','$coupon_limit','$coupon_used')";

$run_coupon = mysqli_query($con,$insert_coupon);

if($run_coupon){

echo "<script>alert('New Coupon Has Been Inserted')</script>";

echo "<script>window.open('index.php?view_coupons','_self')</script>";

}


}


}

?>

                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>