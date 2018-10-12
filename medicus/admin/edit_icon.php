<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login/index.php', '_self')</script>";
}

else{

?>

<?php

if(isset($_GET['edit_icon'])){

$edit_id = $_GET['edit_icon'];

$get_icon = "select * from icons where icon_id='$edit_id'";

$run_icon = mysqli_query($con,$get_icon);

$row_edit = mysqli_fetch_array($run_icon);

$i_id = $row_edit['icon_id'];

$i_p = $row_edit['icon_product'];

$i_title = $row_edit['icon_title'];

$i_image = $row_edit['icon_image'];

$new_i_image = $row_edit['icon_image'];

$get_products = "select * from products where product_id='$i_p'";

$run_products = mysqli_query($con,$get_products);

$row_products = mysqli_fetch_array($run_products);

$product_id = $row_products['product_id'];

$product_title = $row_products['product_title'];


}


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
                <h4 class="page-title">Dashboard</h4>
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

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Icon Title </label>

<div class="col-md-6">

<input type="text" name="icon_title" class="form-control" value="<?php echo $i_title; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Select Icon For Products Or Bundles </label>

<div class="col-md-6">

<select name="product_id" class="form-control">

<option value="<?php echo $product_id; ?>"><?php echo $product_title; ?></option>

<?php

$get_p = "select * from products where status='product'";

$run_p = mysqli_query($con,$get_p);

while($row_p = mysqli_fetch_array($run_p)){

$p_id = $row_p['product_id'];

$p_title = $row_p['product_title'];

echo "<option value='$p_id'>$p_title</option>";

}


?>

<option> </option>

<option> Select Icon For Bundles </option>

<option></option>

<?php

$get_p = "select * from products where status='bundle'";

$run_p = mysqli_query($con,$get_p);

while($row_p = mysqli_fetch_array($run_p)){

$p_id = $row_p['product_id'];

$p_title = $row_p['product_title'];

echo "<option value='$p_id'>$p_title</option>";

}


?>

</select>

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Select Icon Image </label>

<div class="col-md-6">

<input type="file" name="icon_image" class="form-control" >

<br>

<img src="icon_images/<?php echo $i_image; ?>" width="70" height="70">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="update" class="form-control btn btn-primary" value="Update Icon" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->


<?php

if(isset($_POST['update'])){

$icon_title = $_POST['icon_title'];

$icon_image = $_FILES['icon_image']['name'];

$temp_name = $_FILES['icon_image']['tmp_name'];

$product_id = $_POST['product_id'];

move_uploaded_file($temp_name,"icon_images/$icon_image");

if(empty($icon_image)){

$icon_image = $new_i_image;

}

$update_icon = "update icons set icon_product='$product_id',icon_title='$icon_title',icon_image='$icon_image' where icon_id='$i_id'";

$run_update = mysqli_query($con,$update_icon);

if($run_update){

echo "<script> alert('One Icon Has Been Updated') </script>";

echo "<script>window.open('index.php?view_icons','_self')</script>";

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