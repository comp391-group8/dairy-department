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
    <body>
            <div class="header">
                    <h2>Log in</h2>
                </div>
            <form method="POST" action="user.php" name="vform">
                    <div class="input-group" id="username_div">
                        <label>Username</label>
                        <input type="text" name="username" id="username" onchange="nameVerify()" required>
                        <div style="color: red"><?php if(isset($_GET['user_error'])) {echo "Wrong Username";}?></div>
                    </div>

                    <div class="input-group" id="password_div">
                            <label>Password</label>
                            <input type="password" name="password" id="password" onchange="passwordVerify()" required>
                            <div style="color: red"><?php if(isset($_GET['password_error'])) {echo "Wrong Password";}?></div>
                        </div>

                       <button type="submit" name="login" class="btn">Log in</button>
                        <p> Not yet a member?<a href="signup.php">Sign up</a></p>
            </form>
            
    </body>
</html>