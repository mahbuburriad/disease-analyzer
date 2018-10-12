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


<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Icon Id:</th>
<th>Icon Tile:</th>
<th>Icon Product:</th>
<th>Icon Image:</th>
<th>Delete Icon:</th>
<th>Edit Icon:</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_icons = "select * from icons";

$run_icons = mysqli_query($con,$get_icons);

while($row_icons = mysqli_fetch_array($run_icons)){

$icon_id = $row_icons['icon_id'];

$product_id = $row_icons['icon_product'];

$icon_title = $row_icons['icon_title'];

$icon_image = $row_icons['icon_image'];

$get_p = "select * from products where product_id='$product_id'";

$run_p = mysqli_query($con,$get_p);

$row_p = mysqli_fetch_array($run_p);

$p_title = $row_p['product_title'];

$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $icon_title; ?></td>

<td><?php echo $p_title; ?></td>

<td>

<img src="icon_images/<?php echo $icon_image; ?>" width="50" height="50">

</td>

<td>

<a href="index.php?delete_icon=<?php echo $icon_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_icon=<?php echo $icon_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
