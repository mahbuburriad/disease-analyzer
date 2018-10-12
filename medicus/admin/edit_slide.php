<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login/index.php', '_self')</script>";
}

else{

?>


<?php 

if(isset($_GET['edit_slide'])){

$edit_id = $_GET['edit_slide'];

$edit_slide = "select * from slider where slide_id='$edit_id'";

$run_edit = mysqli_query($con,$edit_slide);

$row_edit = mysqli_fetch_array($run_edit);

$slide_id = $row_edit['slide_id'];

$slide_name = $row_edit['slide_name'];

$slide_image = $row_edit['slide_image'];

$slide_url = $row_edit['slide_url'];

$new_slide_image = $row_edit['slide_image'];

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

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

<div class="form-group" ><!-- 1 form-group Starts -->

<label class="col-md-3 control-label">Slide Name:</label>

<div class="col-md-6">

<input type="text" name="slide_name" class="form-control" value="<?php echo $slide_name; ?>">

</div>

</div><!-- 1 form-group Ends -->

<div class="form-group" ><!-- 2 form-group Starts -->

<label class="col-md-3 control-label">Slide Image:</label>

<div class="col-md-6">

<input type="file" name="slide_image" class="form-control" >
<br>
 <img src="slides_images/<?php echo $slide_image; ?>" width="70" height="70" >

</div>

</div><!-- 2 form-group Ends -->


<div class="form-group" ><!-- 3 form-group Starts -->

<label class="col-md-3 control-label">Slide Url:</label>

<div class="col-md-6">

<input type="text" name="slide_url" value="<?php echo $slide_url; ?>" class="form-control" >

</div>

</div><!-- 3 form-group Ends -->


<div class="form-group" ><!-- 4 form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="update" value="Update Now" class=" btn btn-primary form-control" >

</div>

</div><!-- 4 form-group Ends -->


</form><!-- form-horizontal Ends -->


<?php

if(isset($_POST['update'])){

$slide_name = $_POST['slide_name'];

$slide_image = $_FILES['slide_image']['name'];

$temp_name = $_FILES['slide_image']['tmp_name'];

$slide_url = $_POST['slide_url'];

move_uploaded_file($temp_name,"slides_images/$slide_image");

if(empty($slide_image)){

$slide_image = $new_slide_image;

}

$update_slide = "update slider set slide_name='$slide_name',slide_image='$slide_image',slide_url='$slide_url' where slide_id='$slide_id'";

$run_slide = mysqli_query($con,$update_slide);

if($run_slide){

echo "<script>alert('One Slide Has Been Updated')</script>";

echo "<script>window.open('index.php?view_slides','_self')</script>";

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