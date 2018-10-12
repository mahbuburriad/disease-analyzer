<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login/index.php', '_self')</script>";
}

else{

?>

<?php

if(isset($_GET['edit_enquiry'])){

$edit_id = $_GET['edit_enquiry'];

$get_enquiry_type = "select * from enquiry_types where enquiry_id='$edit_id'";

$run_enquiry_type = mysqli_query($con,$get_enquiry_type);

$row_enquiry_type = mysqli_fetch_array($run_enquiry_type);

$enquiry_id = $row_enquiry_type['enquiry_id'];

$enquiry_title = $row_enquiry_type['enquiry_title'];

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


<form class="form-horizontal" action="" method="post" ><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Enquiry Title </label>

<div class="col-md-6">

<input type="text" name="enquiry_title" class="form-control" value="<?php echo $enquiry_title; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">  </label>

<div class="col-md-6">

<input type="submit" name="update" class="btn btn-primary form-control" value="Update Enquiry Type">

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends-->


<?php

if(isset($_POST['update'])){

$enquiry_title = $_POST['enquiry_title'];

$update_enquiry = "update enquiry_types set enquiry_title='$enquiry_title' where enquiry_id='$enquiry_id'";

$run_enquiry = mysqli_query($con,$update_enquiry);

if($run_enquiry){

echo "<script>alert('One Enquiry Type Has Been Updated')</script>";

echo "<script>window.open('index.php?view_enquiry','_self')</script>";

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