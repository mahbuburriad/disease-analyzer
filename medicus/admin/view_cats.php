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

<div class="table-responsive" ><!-- table-responsive Starts -->


<table  class="table table-bordered table-hover table-striped" ><!-- table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Category ID:</th>
<th>Category Title:</th>
<th>Delete Category:</th>
<th>Edit Category:</th>



</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php 

$i=0;

$get_cats = "select * from categories";

$run_cats = mysqli_query($con,$get_cats);

while($row_cats = mysqli_fetch_array($run_cats)){

$cat_id = $row_cats['cat_id'];

$cat_title = $row_cats['cat_title'];


$i++;



?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $cat_title; ?></td>


<td>

<a href="index.php?delete_cat=<?php echo $cat_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>

</td>

<td>

<a href="index.php?edit_cat=<?php echo $cat_id; ?>" >

<i class="fa fa-pencil" ></i> Edit

</a>

</td>

</tr>


<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table-bordered table-hover table-striped Ends -->


</div><!-- table-responsive Ends -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>