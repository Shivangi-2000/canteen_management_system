<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
           
           $con= mysqli_connect('localhost','root','', 'canteen') or die(mysqli_error($con));
            if(isset($_POST['submit']))
            {
                 
              $food_name= $_POST['food_name'];
              $food_status= $_POST['food_status'];
             
           
              $food_insertion_query="UPDATE `foodstatus` SET `food_status` = '$food_status' WHERE `foodstatus`.`food_name` = '$food_name';";
            
              $food_insertion_submit= mysqli_query($con, $food_insertion_query) or die(mysqli_error($con));
               
                
                
            }
        ?>
        <nav class="navbar navbar-default" style="background-color: #286090;"><div class="container ">
            <div class="navbar-header">
                <a href="menu.php" class="navbar-brand"><P style="color: white;">Cefeteria</p></a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-collapse navbar-right">
                    <li><a href="receptionist.php"><span class="glyphicon glyphicon-home" style="color: white;"></span><p style="color: white;"> Home</p></a></li>
                    <li><a href="Addfood.php"><span class="glyphicon glyphicon-list" style="color: white;"></span><p style="color: white;">Update Menu</p></a></li>
                    <li><a href="Addprice.php"><span class="glyphicon glyphicon-check" style="color: white;"></span><p style="color: white;"> Price</p></a></li>
                </ul>
            </div>
            </div>
                  </nav>
    <center>
         <div class="container" style="margin-top:75px; margin-left: 25%;">
            <div class="row r">
                <div class="col-xs-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Update Food Status</div>
                        <div class="panel-body">
                             <form method="post" action="Addfood.php">
         <label for="food_name">Food Name:</label>
            <select class="form-control" name="food_name">
                                 <option>Dosa</option>
                                 <option>Aloo Ka Paratha</option>
                                 <option>Veg Noodles</option>
                                 <option>Chilli Potato</option>
                                 <option>chinese noodle</option>
                                 <option>Paneer Paratha</option>
                                 <option>Simple Paratha</option>
                                 <option>Egg Roll</option>
                                 <option>Singapuri noodle</option>
                                 <option>Paneer roll</option>
                                 <option>Egg Bhurji</option>
                                 <option>paneer noodle</option>
                                 <option>omelette</option>
                                 <option>Spring Roll</option>
                                 <option>Spring Roll</option>
                                 <option>Spring Roll</option>
                                 <option>Spring Roll</option>
                                 
                             </select>
        <input type="radio" name="food_status" value="Not availabe" >Not available
        <input type="radio" name="food_status" value="Availabe" >Available
        <br><button type="submit" name="submit">Update</button>
        </form>
                        </div>
                        <div class="panel-footer">Thank you!!</div>
                    </div>
                </div>
            </div>
        </div><br>
    </center>
        <!--
        <form method="post" action="menu.php">
        <h4>Dosa:</h4> INSERT INTO `foodstatus` (`food_name`, `food_status`) VALUES ('$food_name', '$food_status');
        <input type="radio" name="a" value="Not availabe" >Not available
        <input type="radio" name="a" value="Availabe" >Available
        <h4>Aloo Ka Paratha:</h4>
        <input type="radio" name="b" value="Not availabe" >Not available
        <input type="radio" name="b" value="Availabe" >Available
        <h4>Veg Noodles:</h4>
        <input type="radio" name="c" value="Not availabe" >Not available
        <input type="radio" name="c" value="Availabe" >Available
        <h4>Chilli Potato:</h4>
        <input type="radio" name="d" value="Not availabe" >Not available
        <input type="radio" name="d" value="Availabe" >Available
        <h4>chinese noodle:</h4>
        <input type="radio" name="e" value="Not availabe" >Not available
        <input type="radio" name="e" value="Availabe" >Available
        <h4>Paneer Paratha:</h4>
        <input type="radio" name="f" value="Not availabe" >Not available
        <input type="radio" name="f" value="Availabe" >Available
        <h4>Simple Paratha:</h4>
        <input type="radio" name="g" value="Not availabe" >Not available
        <input type="radio" name="g" value="Availabe" >Available
        <h4>Egg Roll:</h4>
        <input type="radio" name="h" value="Not availabe" >Not available
        <input type="radio" name="h" value="Availabe" >Available
        <h4>Singapuri noodle:</h4>
        <input type="radio" name="i" value="Not availabe" >Not available
        <input type="radio" name="i" value="Availabe" >Available
        <h4>Paneer roll:</h4>
        <input type="radio" name="j" value="Not availabe" >Not available
        <input type="radio" name="j" value="Availabe" >Available
        <h4>paneer noodle:</h4>
        <input type="radio" name="k" value="Not availabe" >Not available
        <input type="radio" name="k" value="Availabe" >Available
        <h4>Egg Bhurji:</h4>
        <input type="radio" name="l" value="Not availabe" >Not available
        <input type="radio" name="l" value="Availabe" >Available
        <h4>omelette:</h4>
        <input type="radio" name="m" value="Not availabe" >Not available
        <input type="radio" name="m" value="Availabe" >Available
        <h4>Spring Roll:</h4>
        <input type="radio" name="n" value="Not availabe" >Not available
        <input type="radio" name="n" value="Availabe" >Available
        <h4>Spring Roll:</h4>
        <input type="radio" name="o" value="Not availabe" >Not available
        <input type="radio" name="o" value="Availabe" >Available
        <h4>Spring Roll:</h4>
        <input type="radio" name="p" value="Not availabe" >Not available
        <input type="radio" name="p" value="Availabe" >Available
        <button type="submit" name="submit">Update</button>
    </form>-->
    </body>
</html>
