<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login/index.php', '_self')</script>";
}

else{

?>

<?php

$file = "../css/style.css";

if(file_exists($file)){

$data = file_get_contents($file);

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
                <h4 class="page-title">Edit Css</h4>
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
                        <h4 class="card-title">Edit CSS</h4>
                       

<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->

<div class="form-group"><!-- 1 form-group Starts -->

<div class="col-md-12">

<textarea class="form-control" name="newdata" rows="25">
<?php echo $data; ?>
</textarea>

</div>

</div><!-- 1 form-group Ends -->

<div class="form-group"><!-- 2 form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="update" value="Update css File" class="btn btn-primary form-control">

</div>

</div><!-- 2 form-group Ends -->

</form><!-- form-horizontal Ends -->



<?php

if(isset($_POST['update'])){

$newdata = $_POST['newdata'];

$handle = fopen($file, "w");

fwrite($handle, $newdata);

fclose($handle);

echo "<script>alert('css File Has Been Updated')</script>";

echo "<script>window.open('index.php?edit_css','_self')</script>";

}

?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>