<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login/index.php', '_self')</script>";
}

else{

?>


<?php

if(isset($_GET['edit_rel'])){

$edit_id = $_GET['edit_rel'];

$edit_rel = "select * from bundle_product_relation where rel_id='$edit_id'";

$run_edit = mysqli_query($con,$edit_rel);

$row_edit = mysqli_fetch_array($run_edit);

$r_id = $row_edit['rel_id'];

$r_title = $row_edit['rel_title'];

$r_p = $row_edit['product_id'];

$r_b = $row_edit['bundle_id'];

$get_p = "select * from products where product_id='$r_p'";

$run_p = mysqli_query($con,$get_p);

$row_p = mysqli_fetch_array($run_p);

$p_id = $row_p['product_id'];

$p_title = $row_p['product_title'];


$get_b = "select * from products where product_id='$r_b'";

$run_b = mysqli_query($con,$get_b);

$row_b = mysqli_fetch_array($run_b);

$b_id = $row_b['product_id'];

$b_title = $row_b['product_title'];


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
                <h4 class="page-title">Edit Relation</h4>
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
                        <h4 class="card-title">Edit Relation</h4>
     

<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Relation Title  </label>

<div class="col-md-6">

<input type="text" name="rel_title" class="form-control" value="<?php echo $r_title; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Select Product  </label>

<div class="col-md-6">

<select name="product_id" class="form-control">

<option value="<?php echo $p_id; ?>"> <?php echo $p_title; ?>  </option>

<?php

$get_p = "select * from products where status='product'";

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

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Select Bundle  </label>

<div class="col-md-6">

<select name="bundle_id" class="form-control">

<option value="<?php echo $b_id; ?>">  <?php echo $b_title; ?> </option>

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


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="update" class="btn btn-primary form-control" value="Update Relation">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->




<?php

if(isset($_POST['update'])){

$rel_title = $_POST['rel_title'];

$product_id = $_POST['product_id'];

$bundle_id = $_POST['bundle_id'];

$update_rel = "update bundle_product_relation set rel_title='$rel_title',product_id='$product_id',bundle_id='$bundle_id' where rel_id='$r_id'";

$run_rel = mysqli_query($con,$update_rel);

if($run_rel){

echo "<script>alert('Relation Has Been Updated')</script>";

echo "<script> window.open('index.php?view_rel','_self') </script>";

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