<?php
session_start();
$con= mysqli_connect('localhost','root','', 'canteen') or die(mysqli_error($con));
            if(isset($_POST['submit']))
            {
                $email=$_POST['email'];
                $password=$_POST['password'];
                $login_query="SELECT *from register where Email='$email' && Password='$password';";
            
                $login_submit= mysqli_query($con, $login_query) or die(mysqli_error($con));
                $rowcount= mysqli_num_rows($login_submit);
                if($rowcount==true)
                {
                    if($email=='shivangiguptaoct11@gmail.com' && $password=='ranu@2000')
                    {
                       header('location:receptionist.php');
                    }
                    else 
                        {
                    header('location:menu.php');
                    }
                }
                else 
                    {
                      echo '<h3 style="color:red; text-align:center;">'.'lkj email and password not match'.'</h3>';
                     }
            }

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    
        <div class="col-xs-6 col-xs-offset-3 " style="margin-top: 70px;">
            <div class="panel panel-danger">
                <div class="panel-heading"><h4>Cafeteria</h4></div>
                <div class="panel-body">
                    
                    <form method="post" action="">
                       
                        <div  class="form-group">
                            <label for="email"><h4>Email</h4></label>
                            <input type="email" class="form-control " id="email" name="email" required>
                        </div>
                         <div  class="form-group">
                             <label for="password"><h4>Password</h4></label>
                             <input type="password" class="form-control " id="password" name="password"required>
                        </div>
                        
                        <button type="submit" name="submit"class="btn btn-warning" align:left>submit</button>                        
                        <a href="register.php" ><h4>Register for new user</h4></a>
                    </form>
                </div>
                </div>
            </div>
        </div>

    </body>
</html>
