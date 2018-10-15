<center>

    <h1>Do You Really Want to Delete This Account???</h1>
    <p>We miss you and You will miss many new things in future <i class="far fa-frown"></i> </p>


    <form action="" method="post">


        <input class="btn btn-danger" type="submit" name="yes" value=" Yes, I want to delete">
        <input class="btn btn-warning" type="submit" name="no" value=" No, I dont want to delete, Thanks">

    </form>

</center>


<?php
    $c_email = $_SESSION['customer_email'];
    if(isset($_POST['yes'])){
        $delete_customer = "delete from customers where customer_email='$c_email'";
        $run_delete = mysqli_query($con,$delete_customer);
        if($run_delete){
        session_destroy();
        echo "<script>alert('Very Sad!! Your Account Has Been Deleted! Good By')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }

}

    if(isset($_POST['no'])){
    echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}


?>
