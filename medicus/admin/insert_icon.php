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
                <h4 class="page-title">Insert Icon</h4>
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

<label class="col-md-3 control-label"> Icon Title </label>

<div class="col-md-6">

<input type="text" name="icon_title" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Select Icon For Products Or Bundles </label>

<div class="col-md-6">

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"> Select Icon For Products Or Bundles </h3>

</div><!-- panel-heading Ends -->

<div class="panel-body" style="height:200px; overflow-y:scroll;"><!-- panel-body  Starts -->

<ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Starts -->

<h4> Select Icon for Products </h4>


<?php

$get_p = "select * from products where status='product'";

$run_p = mysqli_query($con,$get_p);

while($row_p = mysqli_fetch_array($run_p)){

$p_id = $row_p['product_id'];

$p_title = $row_p['product_title'];

echo "<input type='checkbox' value='$p_id' name='product_id[]'> &nbsp;$p_title <br> ";

}


?>

<h4> Select Icon for Bundles </h4>

<?php

$get_p = "select * from products where status='bundle'";

$run_p = mysqli_query($con,$get_p);

while($row_p = mysqli_fetch_array($run_p)){

$p_id = $row_p['product_id'];

$p_title = $row_p['product_title'];

echo "<input type='checkbox' value='$p_id' name='product_id[]'> &nbsp;$p_title <br> ";

}


?>


</ul><!-- nav nav-pills nav-stacked category-menu Ends -->

</div><!-- panel-body  Ends -->

</div><!-- panel panel-default Ends -->

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Select Icon Image </label>

<div class="col-md-6">

<input type="file" name="icon_image" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" class="form-control btn btn-primary" value="Insert Icon" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->



<?php

if(isset($_POST['submit'])){

$icon_title = $_POST['icon_title'];

$icon_image = $_FILES['icon_image']['name'];

$temp_name = $_FILES['icon_image']['tmp_name'];

move_uploaded_file($temp_name,"icon_images/$icon_image");

foreach($_POST['product_id'] as $product_id){

$insert_icon = "insert into icons (icon_product,icon_title,icon_image) values ('$product_id','$icon_title','$icon_image')";

$run_icon = mysqli_query($con,$insert_icon);


}

echo "<script>alert('New Icon Has Been Inserted')</script>";

echo "<script> window.open('index.php?view_icons','_self') </script>";


}


?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>