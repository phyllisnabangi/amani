<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
    session_start();
//Login User
    if(isset($_POST['submit1'])){
       include('connect-db.php');
       $username=$_POST['uname'];
       $password=$_POST['pwd'];
        
        $s = "SELECT * FROM RegisteredUser WHERE userName='$username'and password='$password'";
        $r = mysqli_query($con,$s);
        $count = mysqli_num_rows($r);
         if($count==0){
           echo"Entered wrong details";
           header('location:login.php');
    } else{
      
      while ($row = mysqli_fetch_array($r)) {
        $_SESSION['id'] = $row['registeredUserId'];
        $_SESSION['username'] = $row['userName'];
      }
            
             echo"Successfully logged in";
             header('location:billboard_book.php');
    }
    }

//Login Admin
   if(isset($_POST['submit2'])){
       include('connect-db.php');
       $username=$_POST['uname'];
       $password=$_POST['pwd'];
        
        $s = "SELECT * FROM Admin WHERE userName='$username'and password='$password'";
        $r = mysqli_query($con,$s);
   $count = mysqli_num_rows($r);
         if($count==0){
          include('menu.php');
                ?>
        
        <div class="failure_msg">
          <br>
       Username and Password are incorrect, Please try again!!<br>
        </div>
        <?php
  
        include('admin_form.php');
        include('footer.php');
    } else{
        $result=mysqli_fetch_array($r);     
             $_SESSION['username'] = $username; 
             echo"Successfully logged in";
              header('location:view.php');
             
    }
}    
?>


</body>
</html>

