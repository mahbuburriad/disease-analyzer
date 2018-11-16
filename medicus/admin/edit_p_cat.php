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
$p_cat_desc = $row_edit['p_cat_desc'];


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
                <h4 class="page-title">Edit Product Categories</h4>
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
                        <h4 class="card-title">Edit Product Categories</h4>
              

                        <form class="form-horizontal" action="" method="post">


                            <div class="form-group">


                                <label class="col-md-3 control-label">Product Category Title</label>

                                <div class="col-md-6">

                                    <input type="text" name="p_cat_title" class="form-control" value="<?php echo $p_cat_title; ?>">

                                </div>

                            </div>


                            <div class="form-group">


                                <label class="col-md-3 control-label">Product Category Description</label>

                                <div class="col-md-6">

                                    <textarea type="text" name="p_cat_desc" class="form-control">
<?php echo $p_cat_desc; ?>
</textarea>

                                </div>

                            </div>


                            <div class="form-group">


                                <label class="col-md-3 control-label"></label>

                                <div class="col-md-6">

                                    <input type="submit" name="update" value="Update Now" class="btn btn-primary form-control">

                                </div>

                            </div>

                        </form>


<?php

if(isset($_POST['update'])){

$p_cat_title = $_POST['p_cat_title'];

$p_cat_desc = $_POST['p_cat_desc'];


$update_p_cat = "update product_categories set p_cat_title='$p_cat_title',p_cat_desc='$p_cat_desc' where p_cat_id='$p_cat_id'";

$run_p_cat = mysqli_query($con,$update_p_cat);

if($run_p_cat){

echo "<script>alert('Product Category has been Updated')</script>";

echo "<script>window.open('index.php?view_p_cat','_self')</script>";

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