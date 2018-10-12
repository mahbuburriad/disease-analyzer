<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php', '_self')</script>";
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
                        
                        <form class="form-horizontal m-t-30" action="" method="post" enctype="multipart/form-data">
                            <!-- form-horizontal Starts -->

                            <div class="form-group">
                                <!-- form-group Starts -->

                                <label class="col-md-3 control-label">Product Category Title</label>

                                <div class="col-md-6">

                                    <input type="text" name="p_cat_title" class="form-control">

                                </div>

                            </div><!-- form-group Ends -->

                            <div class="form-group">
                                <!-- form-group Starts -->

                                <label class="col-md-3 control-label">Show as Top Product Category</label>

                                <div class="col-md-6">

                                    <input type="radio" name="p_cat_top" value="yes">

                                    <label> Yes </label>

                                    <input type="radio" name="p_cat_top" value="no">

                                    <label> No </label>

                                </div>

                            </div><!-- form-group Ends -->

                            <div class="form-group">
                                <!-- form-group Starts -->

                                <label class="col-md-3 control-label"> Select Product Category Image</label>

                                <div class="col-md-6">

                                    <input type="file" name="p_cat_image" class="form-control">

                                </div>

                            </div><!-- form-group Ends -->

                            <div class="form-group">
                                <!-- form-group Starts -->

                                <label class="col-md-3 control-label"></label>

                                <div class="col-md-6">

                                    <input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">

                                </div>

                            </div><!-- form-group Ends -->

                        </form>
                        </center><!-- form-horizontal Ends -->
                        <?php

if(isset($_POST['submit'])){

$p_cat_title = $_POST['p_cat_title'];

$p_cat_top = $_POST['p_cat_top'];

$p_cat_image = $_FILES['p_cat_image']['name'];

$temp_name = $_FILES['p_cat_image']['tmp_name'];

move_uploaded_file($temp_name,"other_images/$p_cat_image");
    

$insert_p_cat = "insert into product_categories (p_cat_title,p_cat_top,p_cat_image) values ('$p_cat_title','$p_cat_top','$p_cat_image')";

$run_p_cat = mysqli_query($con,$insert_p_cat);

if($run_p_cat){

echo "<script>alert('New Product Category Has been Inserted')</script>";

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