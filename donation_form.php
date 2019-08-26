<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="style.css"/>
<style type="text/css">
  .msg{
            height: 20px;
            color:darkred;

            }
</style>
      </head>
<body>  
  <div class="content">
<center>
  <form id="myform" action="insert.php" method="post">
    <center><table>
        <tr><td colspan="2">
            <h3>REGISTER HERE.</h3>
	</td></tr>
        
	<tr><td>
	<label for="fname">First Name:</label></td><td>
    <input class="text" type="text" id="fname" name="fname" onkeypress="fname_validate()"><br />
  <div class="msg" >
   <small  id="fname_error"></small> 
  </div>
  
	</td></tr>
<tr><td>
    <label for="lname">Last Name:</label></td><td>
    <input class="text" type="text" id="lname" name="lname" onkeypress="lname_validate()"><br />
    <div class="msg" >
  <small id="lname_error"></small>
</div></td></tr>
   <tr><td>   
    <label>Email:</label></td><td>
    <input class="text" id="email" type="text" name="email" onkeypress="email_validate()"><br />
    <div class="msg" >
  <small id="email_error"></small>
</div></td></tr>
    <tr><td>  
    <label>Gender:</label></td><td>
    <input class="none" type="radio" name="gender" value="male" checked> Male
    <input class="none" type="radio" name="gender" value="female"> Female<br /></td></tr>
   <tr><td>    
    <label>Contact:</label></td><td>
    <input class="text" type="text" id="contact" name="contact" onkeypress="contact_validate()"><br />
    <div class="msg" >
  <small id="contact_error"></small>
</div>
	</td></tr>
    <tr><td>   
    <label>Country of Residence:</label></td><td>
    <input class="text" type="text" id="uname" name="country" onkeypress="country_validate()"><br />
    <div class="msg" >
    <small id="country_error"></small>
  </div>
  </td></tr>
     <tr><td>
    <label for="comment">Comment:</label></td><td>
      <textarea class="text" rows="5" id="comment"></textarea>
    <div class="msg">
    </div>
  </td></tr>
 	<!--<tr><td> 
    <label>Password:</label></td><td>
    <input class="text" type="password" id="pwd" name="password" onkeypress="password_validate()"><br />
    <div class="msg" >
    <small id="password_error"></small>
  </div>
	</td></tr>
      <tr><td>
    <label>Confirm Password:</label></td><td>
    <input class="text" type="password" id="pwd2" name="password1" onkeypress="password_validate()"><br />
    <div class="msg" >
    <small id="confirm_password_error"></small>
  </div>
	</td></tr> -->
    <tr><td>
    <input type="reset" class="button" value="Reset">
	</td>
    <td>
    <input type="Submit" class="button" value="Submit">
	</td>
    </tr>
      <!--  <tr>
    <td colspan="2">
        <p>Already have an account?</p>
    <a href="login.php" title="">Sign in instead.</a>
	</td>
    </tr>-->
	</table>
      </center></form></center></div>
  <!--<input class="text" type="text" id="fname" name="fname" onkeypress="return(event.charCode >96 && event.charCode <123)|| (event.charCode >64 && event.charCode <91) "><br />-->
    
    <script type="text/javascript">
       
    //first name validation
       function fname_validate(){
        var fname = document.getElementById('fname').value;
        var nameregex= /^[a-zA-Z]+$/;
        
         if (fname == "") {

      document.getElementById('fname_error').innerHTML = "Please enter your first name";
      document.getElementById("fname").style.borderColor = "darkred";
           }else{
     if (!nameregex.test(fname)) {
        
        document.getElementById('fname_error').innerHTML = "Invalid only alphabets required";
          document.getElementById("fname").style.borderColor = "darkred";
        }else{
      document.getElementById('fname_error').innerHTML = "";
      document.getElementById("fname").style.borderColor = "green";
    }
    }}

    //last name validation    
     function lname_validate(){
     var lname = document.getElementById('lname').value;
     var nameRegexp= /^[a-zA-Z]+$/;
     
    if (lname == "") {
      
      document.getElementById('lname_error').innerHTML = "Please enter your last name";
        document.getElementById("lname").style.borderColor = "darkred";
    }else{
      
      
       if (!nameRegexp.test(lname)) {
        
        document.getElementById('lname_error').innerHTML = "Invalid only alphabets required";
          document.getElementById("lname").style.borderColor = "darkred";
        }else{
      
      document.getElementById('lname_error').innerHTML = "";
        document.getElementById("lname").style.borderColor = "green";
    }
    }
    }

    //contact validation    
    function contact_validate(){
      var contact = document.getElementById('contact').value;
     
       if (contact == "") {
      
           document.getElementById('contact_error').innerHTML = "Please enter your contact";
           document.getElementById("contact").style.borderColor = "darkred";
    }else{
             
      document.getElementById('contact_error').innerHTML = "";
        document.getElementById("contact").style.borderColor = "green";
    }
    
    }
   
   //email validation
        function email_validate(){
    
     var email = document.getElementById('email').value;
      var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
      
     if (email == "") {
        document.getElementById('email_error').innerHTML = "Please enter your email";
         document.getElementById("email").style.borderColor = "darkred";
    } else {
      if (!emailRegex.test(email)) {
        
        document.getElementById('email_error').innerHTML = "invalid email.";
          document.getElementById("email").style.borderColor = "darkred";
      }else{
      
      document.getElementById('email_error').innerHTML = "";
          document.getElementById("email").style.borderColor = "green";
    }
    }
    
    }

     //country validation
        function country_validate() {
        var country = document.getElementById('uname').value;

     if (country == "") {
      
      document.getElementById('country_error').innerHTML = "please enter country.";
         document.getElementById("uname").style.borderColor = "darkred";
    }else{
      
      document.getElementById('country_error').innerHTML = "";
        document.getElementById("uname").style.borderColor = "green";
    }
   
      }
     
    //password validation    
    /*function password_validate(){
    
    var password = document.getElementById('pwd').value;
     var confirm_pasword = document.getElementById('pwd2').value;

     if (password == "") {
      
      document.getElementById('password_error').innerHTML = "password required.";
         document.getElementById("pwd").style.borderColor = "darkred";
     }else{
      document.getElementById('password_error').innerHTML = "";
         document.getElementById("pwd").style.borderColor = "green";
    }
      
     if (confirm_pasword == "") {
      
      document.getElementById('confirm_password_error').innerHTML = "please confirm password.";
      document.getElementById("pwd2").style.borderColor = "darkred";
    }else{
    if (password != confirm_pasword) {
      
      document.getElementById('confirm_password_error').innerHTML = "Both passwords must be the same.";
        document.getElementById("pwd2").style.borderColor = "darkred";
    }else{
      
      document.getElementById('confirm_password_error').innerHTML = "";
        document.getElementById("pwd2").style.borderColor = "green";
    }}
   
     }*/

    </script>

    </body></html>