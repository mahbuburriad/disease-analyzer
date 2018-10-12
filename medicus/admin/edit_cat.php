<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login/index.php', '_self')</script>";
}

else{

?>

<?php

if(isset($_GET['edit_cat'])){

$edit_id = $_GET['edit_cat'];

$edit_cat = "select * from categories where cat_id='$edit_id'";

$run_edit = mysqli_query($con,$edit_cat);

$row_edit = mysqli_fetch_array($run_edit);

$c_id = $row_edit['cat_id'];

$c_title = $row_edit['cat_title'];

$c_top = $row_edit['cat_top'];

$c_image = $row_edit['cat_image'];

$new_c_image = $row_edit['cat_image'];

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

<label class="col-md-3 control-label">Category Title</label>

<div class="col-md-6">

<input type="text" name="cat_title" class="form-control" value="<?php echo $c_title; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Show as Category Top</label>

<div class="col-md-6">

<input type="radio" name="cat_top" value="yes" 
<?php if($c_top == 'no'){}else{ echo "checked='checked'"; } ?>>

<label>Yes</label>

<input type="radio" name="cat_top" value="no" 
<?php if($c_top == 'no'){ echo "checked='checked'"; }else{} ?>>

<label>No</label>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Select Category Image</label>

<div class="col-md-6">

<input type="file" name="cat_image" class="form-control">

<br>

<img src="other_images/<?php echo $c_image; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="update" value="Update Category" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->



<?php

if(isset($_POST['update'])){

$cat_title = $_POST['cat_title'];

$cat_top = $_POST['cat_top'];

$cat_image = $_FILES['cat_image']['name'];

$temp_name = $_FILES['cat_image']['tmp_name'];

move_uploaded_file($temp_name,"other_images/$cat_image");

if(empty($cat_image)){

$cat_image= $new_c_image;

}

$update_cat = "update categories set cat_title='$cat_title',cat_top='$cat_top',cat_image='$cat_image' where cat_id='$c_id'";

$run_cat = mysqli_query($con,$update_cat);

if($run_cat){

echo "<script>alert('One Category Has Been Updated')</script>";

echo "<script>window.open('index.php?view_cats','_self')</script>";

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