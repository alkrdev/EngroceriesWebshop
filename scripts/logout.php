<?php 
    session_start();
    unset($_SESSION['is_auth']);
    session_destroy();
 
    // After logout, send them back to login.php
    header("location: login.php");
    

?>