<?php 
session_start();

if (isset($_SESSION['username'])) {
   header('location: view.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>admin login</title>
    <link rel="stylesheet" href="style.css"/>
    
    </head>
<body>
   <?php include 'menu.php'; ?>	
     <center>
      <?php include 'admin_form.php'; ?> 
</center>
</body>
  <?php include 'footer.php'; ?>	
</html>
