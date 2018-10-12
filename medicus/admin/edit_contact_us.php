<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login/index.php', '_self')</script>";
}

else{

?>


<?php

$get_conatct_us = "select * from contact_us";

$run_contact_us = mysqli_query($con,$get_conatct_us);

$row_contact_us = mysqli_fetch_array($run_contact_us);

$contact_email = $row_contact_us['contact_email'];

$contact_heading = $row_contact_us['contact_heading'];

$contact_desc = $row_contact_us['contact_desc'];



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

<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Contact Email: </label>

<div class="col-md-6">

<input type="text" name="contact_email" class="form-control" value="<?php echo $contact_email; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Contact Heading: </label>

<div class="col-md-6">

<input type="text" name="contact_heading" class="form-control" value="<?php echo $contact_heading; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Contact Description: </label>

<div class="col-md-6">

<textarea name="contact_desc" class="form-control" rows="6" cols="19">
<?php echo $contact_desc; ?>
</textarea>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" class="btn btn-primary form-control" value=" Update Contact Us ">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->



<?php

if(isset($_POST['submit'])){

$contact_email = $_POST['contact_email'];

$contact_heading = $_POST['contact_heading'];

$contact_desc = $_POST['contact_desc'];


$update_contact_us = "update contact_us set contact_email='$contact_email',contact_heading='$contact_heading',contact_desc='$contact_desc'";

$run_contact_us = mysqli_query($con,$update_contact_us);

if($run_contact_us){

echo "<script>alert('Contact Us Page Has Been Updated')</script>";

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