
    <?php

$con = mysqli_connect("localhost","root","","medicus");

if(isset($_GET['delete_cart'])){

$delete_id = $_GET['delete_cart'];

$delete_cart = "delete from cart where p_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_cart);

if($run_delete){

echo "<script> alert('One product Has Been Deleted') </script>";

echo "<script>window.open('pharmacy.php','_self')</script>";

}

}

?>

