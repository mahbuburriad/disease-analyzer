<?php



if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

    <?php

if(isset($_GET['user_profile'])){
$edit_id = $_GET['user_profile'];
$get_admin = "select * from admins where admin_id='$edit_id'";
$run_admin = mysqli_query($con,$get_admin);
$row_admin = mysqli_fetch_array($run_admin);
$admin_id = $row_admin['admin_id'];
$admin_name = $row_admin['admin_name'];
$admin_email = $row_admin['admin_email'];
$admin_pass = $row_admin['admin_pass'];
$admin_image = $row_admin['admin_image'];
$admin_cover_image = $row_admin['admin_cover_image'];
$admin_country = $row_admin['admin_country'];
$admin_job = $row_admin['admin_job'];
$admin_contact = $row_admin['admin_contact'];
$admin_about = $row_admin['admin_about'];

}



?>

        <style>
            .card {
                padding-top: 20px;
                margin: 10px 0 20px 0;
                background-color: rgba(214, 224, 226, 0.2);
                border-top-width: 0;
                border-bottom-width: 2px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                width: 1100px;
            }

            .card .card-heading {
                padding: 0 20px;
                margin: 0;
            }

            .card .card-heading.simple {
                font-size: 20px;
                font-weight: 300;
                color: #777;
                border-bottom: 1px solid #e5e5e5;
            }

            .card .card-heading.image img {
                display: inline-block;
                width: 46px;
                height: 46px;
                margin-right: 15px;
                vertical-align: top;
                border: 0;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
            }

            .card .card-heading.image .card-heading-header {
                display: inline-block;
                vertical-align: top;
            }

            .card .card-heading.image .card-heading-header h3 {
                margin: 0;
                font-size: 14px;
                line-height: 16px;
                color: #262626;
            }

            .card .card-heading.image .card-heading-header span {
                font-size: 12px;
                color: #999999;
            }

            .card .card-body {
                padding: 0 20px;
                margin-top: 20px;
            }

            .card .card-media {
                padding: 0 20px;
                margin: 0 -14px;
            }

            .card .card-media img {
                max-width: 100%;
                max-height: 100%;
            }

            .card .card-actions {
                min-height: 30px;
                padding: 0 20px 20px 20px;
                margin: 20px 0 0 0;
            }

            .card .card-comments {
                padding: 20px;
                margin: 0;
                background-color: #f8f8f8;
            }

            .card .card-comments .comments-collapse-toggle {
                padding: 0;
                margin: 0 20px 12px 20px;
            }

            .card .card-comments .comments-collapse-toggle a,
            .card .card-comments .comments-collapse-toggle span {
                padding-right: 5px;
                overflow: hidden;
                font-size: 12px;
                color: #999;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .card-comments .media-heading {
                font-size: 13px;
                font-weight: bold;
            }

            .card.people {
                position: relative;
                display: inline-block;
                width: 170px;
                height: 300px;
                padding-top: 0;
                margin-left: 20px;
                overflow: hidden;
                vertical-align: top;
            }

            .card.people:first-child {
                margin-left: 0;
            }

            .card.people .card-top {
                position: absolute;
                top: 0;
                left: 0;
                display: inline-block;
                width: 170px;
                height: 150px;
                background-color: #ffffff;
            }

            .card.people .card-top.green {
                background-color: #53a93f;
            }

            .card.people .card-top.blue {
                background-color: #427fed;
            }

            .card.people .card-info {
                position: absolute;
                top: 150px;
                display: inline-block;
                width: 100%;
                height: 101px;
                overflow: hidden;
                background: #ffffff;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            .card.people .card-info .title {
                display: block;
                margin: 8px 14px 0 14px;
                overflow: hidden;
                font-size: 16px;
                font-weight: bold;
                line-height: 18px;
                color: #404040;
            }

            .card.people .card-info .desc {
                display: block;
                margin: 8px 14px 0 14px;
                overflow: hidden;
                font-size: 12px;
                line-height: 16px;
                color: #737373;
                text-overflow: ellipsis;
            }

            .card.people .card-bottom {
                position: absolute;
                bottom: 0;
                left: 0;
                display: inline-block;
                width: 100%;
                padding: 10px 20px;
                line-height: 29px;
                text-align: center;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            .card.hovercard {
                position: relative;
                padding-top: 0;
                overflow: hidden;
                text-align: center;
                background-color: rgba(214, 224, 226, 0.2);
            }

            .card.hovercard .cardheader {
                background: url("admin_images/<?php echo $admin_image; ?>");
                background-size: cover;
                height: 700px;
            }

            .card.hovercard .avatar {
                position: relative;
                top: -50px;
                margin-bottom: -50px;
            }

            .card.hovercard .avatar img {
                width: 100px;
                height: 100px;
                max-width: 100px;
                max-height: 100px;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
                border: 5px solid rgba(255, 255, 255, 0.5);
            }

            .card.hovercard .info {
                padding: 4px 8px 10px;
            }

            .card.hovercard .info .title {
                margin-bottom: 4px;
                font-size: 24px;
                line-height: 1;
                color: #262626;
                vertical-align: middle;
            }

            .card.hovercard .info .desc {
                overflow: hidden;
                font-size: 12px;
                line-height: 20px;
                color: #737373;
                text-overflow: ellipsis;
            }

            .card.hovercard .bottom {
                padding: 0 20px;
                margin-bottom: 17px;
            }

            .btn {
                border-radius: 50%;
                width: 32px;
                height: 32px;
                line-height: 18px;
            }

        </style>


        <div class="row">

            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li class="active">

                        <i class="fa fa-dashboard"></i> Dashboard / Profile

                    </li>



                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">
                <div class="col-lg-3 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader">

                        </div>
                        <div class="avatar">
                            <img alt="" src="admin_images/<?php echo $admin_image;?>">
                        </div>
                        <div class="info">
                            <div class="title">
                                <h2>
                                    <?php echo $admin_name ?>
                                </h2>
                            </div>


                            <div class="desc">
                                <?php echo $admin_job; ?>
                            </div>
                            <div class="desc">
                                <?php echo $admin_country; ?>
                            </div>
                            <div class="desc">
                                <?php echo $admin_contact; ?>
                            </div>
                            <div class="desc">
                                <?php echo $admin_email; ?>
                            </div>
                            <div class="desc">
                                <?php echo $admin_about; ?>
                            </div>

                        </div>
                        <div class="bottom">
                            <a class="btn btn-primary btn-facebook btn-sm" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                            <a class="btn btn-danger btn-sm" rel="publisher" href="">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                        </div>
                    </div>

                </div>

            </div>




            <?php }  ?>
