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

<th>Relation Id:</th>

<th>Relation Title:</th>

<th>Relation Product:</th>

<th>Relation Bundle:</th>

<th>Delete Relation:</th>

<th>Edit Relation:</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i = 0;


$get_rel = "select * from bundle_product_relation";

$run_rel = mysqli_query($con,$get_rel);

while($row_rel = mysqli_fetch_array($run_rel)){

$rel_id = $row_rel['rel_id'];

$rel_title = $row_rel['rel_title'];

$bundle_id = $row_rel['bundle_id'];

$product_id = $row_rel['product_id'];

$get_p = "select * from products where product_id='$product_id'";

$run_p = mysqli_query($con,$get_p);

$row_p = mysqli_fetch_array($run_p);

$p_title = $row_p['product_title'];


$get_b = "select * from products where product_id='$bundle_id'";

$run_b = mysqli_query($con,$get_b);

$row_b = mysqli_fetch_array($run_b);

$b_title = $row_b['product_title'];

$i++;

?>

<tr>

<td> <?php echo $i; ?> </td>

<td> <?php echo $rel_title; ?> </td>

<td> <?php echo $p_title; ?> </td>

<td> <?php echo $b_title; ?> </td>

<td>

<a href="index.php?delete_rel=<?php echo $rel_id; ?>">

<i class="fa fa-trash-o"></i> Delete

</a>

</td>

<td>

<a href="index.php?edit_rel=<?php echo $rel_id; ?>">

<i class="fa fa-pencil"></i> Edit

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
