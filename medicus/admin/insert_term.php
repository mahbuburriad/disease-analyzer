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
                <h4 class="page-title">Insert Term</h4>
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

<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Term Title </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="term_title" class="form-control" >

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Term Description </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<textarea name="term_desc" class="form-control" rows="6" cols="19" ></textarea>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Term Link </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="term_link" class="form-control" >

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" name="submit" value="Insert Term" class="btn btn-primary form-control" >

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->



<?php

if(isset($_POST['submit'])){

$term_title = $_POST['term_title'];

$term_desc = $_POST['term_desc'];

$term_link = $_POST['term_link'];

$insert_term = "insert into terms (term_title,term_link,term_desc) values ('$term_title','$term_link','$term_desc')";

$run_term = mysqli_query($con,$insert_term);

if($run_term){

echo "<script>alert('New Term Has Been Inserted')</script>";

echo "<script>window.open('index.php?view_terms','_self')</script>";

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