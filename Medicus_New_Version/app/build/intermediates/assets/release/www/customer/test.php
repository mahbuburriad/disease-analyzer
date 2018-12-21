
<?php
session_start();

if(isset($_SESSION['customer_email'])){
    $c_email = $_SESSION['customer_email'];
    
    
          echo "$c_email";
}
else
{
    echo "sorry";
}
       ?>
       
  
       
       