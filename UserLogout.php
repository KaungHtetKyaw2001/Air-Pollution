<?php 
session_start();
include('header.php');
session_destroy();
echo "<script>alert('User logged out successfully')</script>";
echo "<script> window.location = 'UserLogin.php'</script>";
 ?>
 <?php 
 include('footer.php');
  ?>