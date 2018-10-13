<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / Chat

                </li>

            </ol>


        </div>

    </div>

    <div class="row">

        <iframe src="https://drift.com/" frameborder="0" height="800px" width="1650px"></iframe>



    </div>




    <?php }  ?>
