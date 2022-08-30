<?php 
  
    session_start();
    session_destroy();
    unset($_SESSION['username']);
    // setcookie("Username", "", time() - 120);
    header('location:index.php');
?>
 