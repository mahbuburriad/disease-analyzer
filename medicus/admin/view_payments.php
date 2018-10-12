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

<table class="table table-hover table-bordered table-striped"><!-- table table-hover table-bordered table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Payment No:</th>
<th>Invoice No:</th>
<th>Amount Paid:</th>
<th>Payment Method:</th>
<th>Reference No:</th>
<th>Payment Code:</th>
<th>Payment Date:</th>
<th>Delete Payment:</th>

</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_payments = "select * from payments";

$run_payments = mysqli_query($con,$get_payments);

while($row_payments = mysqli_fetch_array($run_payments)){

$payment_id = $row_payments['payment_id'];

$invoice_no = $row_payments['invoice_no'];

$amount = $row_payments['amount'];

$payment_mode = $row_payments['payment_mode'];

$ref_no = $row_payments['ref_no'];

$code = $row_payments['code'];

$payment_date = $row_payments['payment_date'];

$i++;


?>


<tr>

<td><?php echo $i; ?></td>

<td bgcolor="yellow" ><?php echo $invoice_no; ?></td>

<td>$<?php echo $amount; ?></td>

<td><?php echo $payment_mode; ?></td>

<td><?php echo $ref_no; ?></td>

<td><?php echo $code; ?></td>

<td><?php echo $payment_date; ?></td>

<td>

<a href="index.php?payment_delete=<?php echo $payment_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>

</td>


</tr>


<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-hover table-bordered table-striped Ends -->

</div><!-- table-responsive Ends -->


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
