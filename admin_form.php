<!DOCTYPE html>
<html>
<head>
    <title>admin login</title>
    <link rel="stylesheet" href="style.css"/>
    </head>
<body>

      <div class="content">
  <form action="log.php" method="post">
    <table>
        <tr>
            <td colspan="2">
                <h3>ADMIN LOGIN</h3>
            </td>
        </tr>
    <tr><td>   
    <label>User Name:</label></td><td>
    <input id="uname" type="text" name="uname" onblur="username_validate()" class="text"><br />
    <small id="username_error" style="color: #a94442;"></small>
  </td></tr>
     <tr><td> 
    <label>Password:</label></td><td>
    <input type="password" id="pwd" name="pwd" onblur="password_validate()" class="text"><br />
    <small id="password_error" style="color: #a94442;"></small>
	</td></tr>
    <tr>
        <td>
    <input type="reset" class="button" value="Reset">
    </td>
        <td>
    <input type="submit" name="submit2" class="button" value="Login">
	</td>
    </tr>

	</table>
  </form>
  </div>
  
 <script type="text/javascript">
     function username_validate() {
    var username = document.getElementById('uname').value;

     if (username == "") {
          document.getElementById('username_error').innerHTML = "Username is required and cannot be empty.";
         document.getElementById("uname").style.borderColor = "darkred";
    }else{
      document.getElementById('username_error').innerHTML = "";
    document.getElementById("uname").style.borderColor = "green";
    }
    
      }
     
    function password_validate(){
    var password = document.getElementById('pwd').value;
    
         if (password == "") {
            document.getElementById('password_error').innerHTML = "Password is required and cannot be empty.";
             document.getElementById("pwd").style.borderColor = "darkred";
     }else{
      document.getElementById('password_error').innerHTML = "";
         document.getElementById("pwd").style.borderColor = "green";
    } 
      }
     

 </script>
    
</body>
</html>
