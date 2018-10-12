<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login/index.php', '_self')</script>";
}

else{

?>


<?php

if(isset($_GET['edit_box'])){

$edit_box = $_GET['edit_box'];

$get_boxes = "select * from boxes_section where box_id='$edit_box'";

$run_boxes = mysqli_query($con,$get_boxes);

$row_boxes = mysqli_fetch_array($run_boxes);

$box_id = $row_boxes['box_id'];

$box_title = $row_boxes['box_title'];

$box_desc = $row_boxes['box_desc'];



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


<form class="form-horizontal" method="post" action=""><!-- form-horizontal Starts -->

<div class="form-group"><!-- 1 form-group Starts -->

<label class="col-md-3 control-label">Box Title : </label>

<div class="col-md-6">

<input type="text" name="box_title" class="form-control" value="<?php echo $box_title; ?>">

</div>

</div><!-- 1 form-group Ends -->


<div class="form-group"><!-- 2 form-group Starts -->

<label class="col-md-3 control-label">Box Description : </label>

<div class="col-md-6">

<textarea name="box_desc" class="form-control" rows="6" cols="19">
<?php echo $box_desc; ?>
 </textarea>

</div>

</div><!-- 2 form-group Ends -->


<div class="form-group"><!-- 3 form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="update" value="Update Box" class="btn btn-primary form-control">

</div>

</div><!-- 3 form-group Ends -->

</form><!-- form-horizontal Ends -->



<?php

if(isset($_POST['update'])){

$box_title = $_POST['box_title'];

$box_desc = $_POST['box_desc'];

$update_box = "update boxes_section set box_title='$box_title',box_desc='$box_desc' where box_id='$box_id'";

$run_box = mysqli_query($con,$update_box);

echo "<script>alert('Box Has Been Updated')</script>";

echo "<script>window.open('index.php?view_boxes','_self')</script>";

}


?>




</div>
                </div>
            </div>
        </div>
    </div>
</div>