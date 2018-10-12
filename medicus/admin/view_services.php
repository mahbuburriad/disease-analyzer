<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login/index.php','_self')</script>";

}

else {

?>

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


<?php

$get_services = "select * from services";

$run_services = mysqli_query($con,$get_services);

while($row_services = mysqli_fetch_array($run_services)){

$service_id = $row_services['service_id'];

$service_title = $row_services['service_title'];

$service_image = $row_services['service_image'];

$service_desc = substr($row_services['service_desc'],0,400);

$service_button = $row_services['service_button'];

$service_url = $row_services['service_url'];


?>

<div class="col-lg-4 col-md-4"><!-- col-lg-4 col-md-4 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title" align="center">

<?php echo $service_title; ?>

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<img src="services_images/<?php echo $service_image; ?>" class="img-responsive">

<br>

<p><?php echo $service_desc; ?></p>

</div><!-- panel-body Ends -->

<div class="panel-footer"><!-- panel-footer Starts -->

<a href="index.php?delete_service=<?php echo $service_id; ?>" class="pull-left">

<i class="fa fa-trash-o"></i> Delete

</a>

<a href="index.php?edit_service=<?php echo $service_id; ?>" class="pull-right">

<i class="fa fa-pencil"></i> Edit

</a>

<div class="clearfix"> </div>

</div><!-- panel-footer Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-4 col-md-4 Ends -->

<?php } ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
