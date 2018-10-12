<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login/index.php', '_self')</script>";
}

else{

?>

<?php

if(isset($_GET['edit_p_cat'])){

$edit_p_cat_id = $_GET['edit_p_cat'];

$edit_p_cat_query = "select * from product_categories where p_cat_id='$edit_p_cat_id'";

$run_edit = mysqli_query($con,$edit_p_cat_query);

$row_edit = mysqli_fetch_array($run_edit);

$p_cat_id = $row_edit['p_cat_id'];

$p_cat_title = $row_edit['p_cat_title'];

$p_cat_top = $row_edit['p_cat_top'];

$p_cat_image = $row_edit['p_cat_image'];

$new_p_cat_image = $row_edit['p_cat_image'];

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

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Product Category Title</label>

<div class="col-md-6" >

<input type="text" name="p_cat_title" class="form-control" value="<?php echo $p_cat_title; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Show as Top Product Category</label>

<div class="col-md-6" >

<input type="radio" name="p_cat_top" value="yes" 
<?php if($p_cat_top == 'no'){}else{ echo "checked='checked'"; } ?>>

<label> Yes </label>

<input type="radio" name="p_cat_top" value="no" 
<?php if($p_cat_top == 'no'){ echo "checked='checked'"; }else{} ?>>

<label> No </label>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Select Product Category Image</label>

<div class="col-md-6" >

<input type="file" name="p_cat_image" class="form-control" >

<br>

<img src="other_images/<?php echo $p_cat_image; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update Now" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->


<?php

if(isset($_POST['update'])){

$p_cat_title = $_POST['p_cat_title'];

$p_cat_top = $_POST['p_cat_top'];

$p_cat_image = $_FILES['p_cat_image']['name'];

$temp_name = $_FILES['p_cat_image']['tmp_name'];


move_uploaded_file($temp_name,"other_images/$p_cat_image");

if(empty($p_cat_image)){

$p_cat_image = $new_p_cat_image;

}

$update_p_cat = "update product_categories set p_cat_title='$p_cat_title',p_cat_top='$p_cat_top',p_cat_image='$p_cat_image' where p_cat_id='$p_cat_id'";

$run_p_cat = mysqli_query($con,$update_p_cat);

if($run_p_cat){

echo "<script>alert('Product Category has been Updated')</script>";

echo "<script>window.open('index.php?view_p_cats','_self')</script>";

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