<?php

session_start();

session_destroy();

echo "<script>window.open('login/','_self')</script>";

?>