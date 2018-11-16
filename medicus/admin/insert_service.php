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
                <h4 class="page-title">Insert Service</h4>
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

<label class="col-md-3 control-label"> Service Title : </label>

<div class="col-md-6">

<input type="text" name="service_title" class="form-control">

</div>

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Service Image : </label>

<div class="col-md-6">

<input type="file" name="service_image" class="form-control">

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Service Description : </label>

<div class="col-md-6">

<textarea name="service_desc" class="form-control" rows="10" cols="19">



</textarea>

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Service Button : </label>

<div class="col-md-6">

<input type="text" name="service_button" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Service Url : </label>

<div class="col-md-6">

<input type="url" name="service_url" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" value="Insert Service" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->


<?php

if(isset($_POST['submit'])){

$service_title = $_POST['service_title'];

$service_desc = $_POST['service_desc'];

$service_button = $_POST['service_button'];

$service_url = $_POST['service_url'];

$service_image = $_FILES['service_image']['name'];

$tmp_image = $_FILES['service_image']['tmp_name'];

$sel_services = "select * from services";

$run_services = mysqli_query($con,$sel_services);

$count = mysqli_num_rows($run_services);

if($count == 3){

echo "<script>alert('You Have already Inserted 3 Services columns')</script>";

}
else{

move_uploaded_file($tmp_image,"services_images/$service_image");

$insert_service = "insert into services (service_title,service_image,service_desc,service_button,service_url) values ('$service_title','$service_image','$service_desc','$service_button','$service_url')";

$run_service = mysqli_query($con,$insert_service);

if($run_service){

echo "<script>alert('New Service Column Has Been Inserted')</script>";

echo "<script>window.open('index.php?view_services','_self')</script>";

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