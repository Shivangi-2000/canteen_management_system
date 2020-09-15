<?php
        
       
        $con= mysqli_connect('localhost','root','', 'canteen') or die(mysqli_error($con));
            if(isset($_POST['submit']))
            {
                 $flag=0;
                 $Mobile= $_POST['Mobile'];
                 $Password=$_POST['Password'];
                 if(isset($_POST['Email'])==true && empty($_POST['Email'])==FALSE)
                     {
                        $Email= $_POST['Email'];
                        if(filter_var($Email,FILTER_VALIDATE_EMAIL)==TRUE)
                            {
                                $flag=1;
                            } 
                        else
                            {
                                echo 'your email format is wrong';
                            }
                     }
                 if($flag==1)
                     {
                       
                        $register_insertion_query="INSERT INTO `register` (`Email`,`Password`, `Mobile`) VALUES ('$Email','$Password','$Mobile');";            
                        $register_insertion_submit= mysqli_query($con, $register_insertion_query) or die(mysqli_error($con));
                        echo "<div class='alter alter-success'><p>".'You have successfully regusterd!!'."</p></div>";
                     }
                     
                     header('location:index.html');
			
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
                <div class="panel-heading"><h4>Registration</h4></div>
                <div class="panel-body">
                    
                    <form method="post" action="register.php">
                       
                        <div  class="form-group">
                            <label for="email"><h4>Email</h4></label>
                            <input type="email" class="form-control " name="Email" required >
                        </div>
                         <div  class="form-group">
                             <label for="password"><h4>Password</h4></label>
                             <input type="password" class="form-control " name="Password" required>
                        </div>
                        <div  class="form-group">
                             <label for="Mobile"><h4>Mobile No.</h4></label>
                             <input type="text" class="form-control "  name="Mobile" required>
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-warning">Register</button>
                        
                     
                    </form>
                </div>
                </div>
            </div>
    </body>
</html>
