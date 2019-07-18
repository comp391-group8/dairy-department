<!DOCTYPE html>
<html>
    <head>
        <style>
         *{
             margin: 0px;
             padding: 0px;
         }
         body{
               font-size: 120%;
               width: 100%;
               height: 100%;
         }
         .header{
             width: 30%;
             margin: 50px auto 0px;
             color:white;
             background-color: dodgerblue;
             text-align: center;
             border: 1px solid #B0C4DE;
             border-bottom: none;
             border-radius: 10px 10px 0px 0px;
             padding: 20px;

         }
         form{
            
             width: 30%;
             margin: 0px auto;
             padding: 20px;
             border: 1px solid #B0C4DE;
             background-color: aqua;
             border-radius:0px 0px 10px 10px;
         }
         .input-group{
             margin: 10px 0px 10px 0px;
             color: blue;
         }
         .input-group label{
             display: block;
             text-align: left;
             margin: 3px;

         }
         .input-group input{
             height: 30px;
             width: 93%;
             padding: 5px 10px;
             font-size: 16px;
             border-radius: 5px;
             border: 1px solid gray;
            
             
            }
         .btn{
           padding:10px;
           font-size: 15px;
           color: white;
           background:dodgerblue;
           border:none;
           border-radius: 5px;
           
         }
            
        
        </style>
 

    </head>


</body> 
<div class="header">
    <h2>Create an Account</h2>
</div>
<form method="POST"  onsubmit="return Validate()" action="user.php"name="vform">
    <div class="input-group" id="username_div" >
        <label>Username</label>
        <input type="text" name="username" id="username" onchange="nameVerify()" >
        <div id="name_error"></div>
        <div style="color: red"><?php if(isset($_GET['username_error'])) {echo "Username already taken! Please try a different one.";}?></div>

    </div>
    <div class="input-group" id="email_div">
        <label>Email</label>
        <input type="email" name="email" id="email" onchange="emailVerify()">
        <div id="email_error"></div>
        <div style="color: red"><?php if(isset($_GET['email_error'])) {echo "Email already exists! Please try a different one.";}?></div>

            
    </div>
        <div class="input-group" id="password_div">
            <label>Password</label>
            <input type="password" name="password" id="password"  onchange="passwordVerify()">
        </div>
                
                <div class="input-group" id="pass_confirm_div">
                    <label>Confirm password</label>
                    <input type="password" name="confirm_password" id="password_confirm">
                    <div id="password_error"></div>

                        
        </div>
         <div class="input-group" id="phone_no_div">
                    <label>Phone Number</label>
                    <input type="text" name="phone_no" id="phone_no" onchange="phoneVerify()">
                    <div id="phone_no_error"></div>
                    <div style="color: red"><?php if(isset($_GET['phone_no_error'])) {echo "Phone Number already exists! Please try a different one.";}?></div>


                        
        </div>
         <div class="input-group">
                    <label>Category
                        <select name="category">
                            <option>Farmer</option>
                            <option>Customer</option>
                        </select>

                    </label>
                    

                        
        </div>
        <button type="submit" name="register" class="btn">Register</button>

        <p>Already a member? <a href="login.php">Sign In</a></p>

</form>

<script>

// selecting all text elements
var username = document.forms['vform']['username'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
var phone_no = document.forms['vform']['phone_no'];

// selecting all error display elements
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
var phone_no_error = document.getElementById('phone_no_error');


// validation function
function Validate() {
  // validate username
  if (username.value == "") {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username is required";
    username.focus();
    return false;
  }

  // validate username
  if (username.value.length < 3) {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username must be at least 3 characters";
    username.focus();
    return false;
  }

  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
  //Length of the password
  if (password.value.length < 6) {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_error.textContent = "Password must be at least 6 characters";
    password.focus();
    return false;
  }


  // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  }

  // check if the two passwords match
  if (password.value != password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
     if (phone_no.value.length < 10) {
    phone_no.style.border = "1px solid red";
    document.getElementById('phone_no_div').style.color = "red";
    phone_no.style.border = "1px solid red";
    phone_no_error.innerHTML = "Phone Number should be 10 characters";
    return false;
  }
}
// event handler functions
function nameVerify() {
        
  if (document.getElementById('username').value != "") {
   username.style.border = "1px solid #5e6e66";
   document.getElementById('username_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
    email.style.border = "1px solid #5e6e66";
    document.getElementById('email_div').style.color = "#5e6e66";
    email_error.innerHTML = "";
    return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    document.getElementById('password_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }

  if (password.value === password_confirm.value) {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
    }
  if (password.value.length < 6) {
    password.style.border = "1px solid 5e6e66";
    document.getElementById('password_div').style.color = "#5e6e66";
    password_error.innerHTML = "";    
    return true;
   }
 }
 function phoneVerify(){
    if (phone_no.value.length == 0) && if(phone_no.value.length > 10){
    phone_no.style.border = "1px solid red";
    document.getElementById('phone_no_div').style.color = "red";
    phone_no.style.border = "1px solid red";
    phone_no_error.innerHTML = "Phone Number should be 10 characters";
    return false;
  }

 }
</script>

</html>
<!-- <script src="verify.js"></script -->