<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

  <script>tinymce.init({ selector:'#about_desc' });</script>
  
<?php

$get_about_us = "select * from about_us";

$run_about_us = mysqli_query($con,$get_about_us);

$row_about_us = mysqli_fetch_array($run_about_us);

$about_heading = $row_about_us['about_heading'];

$about_short_desc = $row_about_us['about_short_desc'];

$about_desc = $row_about_us['about_desc'];

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
                        <h4 class="card-title">Edit About</h4>
                        <h6 class="card-subtitle"> Edit about page that modifies some data </h6>

<form method="post" class="form-horizontal"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> About Us Heading : </label>

<div class="col-md-8">

<input type="text" name="about_heading" class="form-control" value="<?php echo $about_heading; ?>">

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> About Us Short Description : </label>

<div class="col-md-8">

<textarea name="about_short_desc" class="form-control" rows="5">

<?php echo $about_short_desc; ?>

</textarea>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> About Us Description : </label>

<div class="col-md-8">

<textarea name="about_desc" id="about_desc" class="form-control" rows="10">

<?php echo $about_desc; ?>

</textarea>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-8">

<input type="submit" name="submit" value="Update About Us Page" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->



<?php

if(isset($_POST['submit'])){

$about_heading = $_POST['about_heading'];

$about_short_desc = $_POST['about_short_desc'];

$about_desc = $_POST['about_desc'];

$update_about_us = "update about_us set about_heading='$about_heading',about_short_desc='$about_short_desc',about_desc='$about_desc'";

$run_about_us = mysqli_query($con,$update_about_us);

if($run_about_us){

echo "<script>alert('About Us Page Has Been Updated')</script>";

echo "<script>window.open('index.php?dashboard','_self')</script>";

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