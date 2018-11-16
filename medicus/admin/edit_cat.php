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
$c_desc = $row_edit['cat_desc'];



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
                <h4 class="page-title">Edit Categories</h4>
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
                        <h4 class="card-title">Edit Categories</h4>
                      
 <form class="form-horizontal" action="" method="post">


                            <div class="form-group">


                                <label class="col-md-3 control-label">Category Title</label>

                                <div class="col-md-6">

                                    <input type="text" name="cat_title" class="form-control" value="<?php echo $c_title; ?>">

                                </div>

                            </div>


                            <div class="form-group">


                                <label class="col-md-3 control-label">Category Description</label>

                                <div class="col-md-6">

                                    <textarea type="text" name="cat_desc" class="form-control">

<?php echo $c_desc; ?>

</textarea>

                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-6">
                                    <input type="submit" name="update" value="Update Category" class="btn btn-primary form-control">
                                </div>
                            </div>

                        </form>



<?php

if(isset($_POST['update'])){
$cat_title = $_POST['cat_title'];
$cat_desc = $_POST['cat_desc'];
$update_cat = "update categories set cat_title='$cat_title',cat_desc='$cat_desc' where cat_id='$c_id'";
$run_cat = mysqli_query($con,$update_cat);

if($run_cat){
echo "<script>alert('One Category Has Been Updated')</script>";
echo "<script>window.open('index.php?view_cat','_self')</script>";

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