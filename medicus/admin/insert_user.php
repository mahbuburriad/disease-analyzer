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
                <h4 class="page-title">Insert User</h4>
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

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Name: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_name" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Email: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_email" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Password: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="password" name="admin_pass" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Country: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_country" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Job: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_job" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Contact: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_contact" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User About: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<textarea name="admin_about" class="form-control" rows="3"> </textarea>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Image: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="file" name="admin_image" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" name="submit" value="Insert User" class="btn btn-primary form-control">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->



<?php

if(isset($_POST['submit'])){

$admin_name = $_POST['admin_name'];

$admin_email = $_POST['admin_email'];

$admin_pass = $_POST['admin_pass'];

$admin_country = $_POST['admin_country'];

$admin_job = $_POST['admin_job'];

$admin_contact = $_POST['admin_contact'];

$admin_about = $_POST['admin_about'];


$admin_image = $_FILES['admin_image']['name'];

$temp_admin_image = $_FILES['admin_image']['tmp_name'];

move_uploaded_file($temp_admin_image,"admin_images/$admin_image");

$insert_admin = "insert into admins (admin_name,admin_email,admin_pass,admin_image,admin_contact,admin_country,admin_job,admin_about) values ('$admin_name','$admin_email','$admin_pass','$admin_image','$admin_contact','$admin_country','$admin_job','$admin_about')";

$run_admin = mysqli_query($con,$insert_admin);


if($run_admin){

echo "<script>alert('One User Has Been Inserted successfully')</script>";

echo "<script>window.open('index.php?view_users','_self')</script>";

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