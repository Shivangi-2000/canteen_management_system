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
        // put your code here
         
           
           $con= mysqli_connect('localhost','root','', 'canteen') or die(mysqli_error($con));
            if(isset($_POST['submit']))
            {
                 
              $food_name= $_POST['food_name'];
              $price= $_POST['price'];
             
           
              $food_insertion_query="UPDATE `price` SET `price` = '$price' WHERE `price`.`food_name` = '$food_name';";
            
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
                        <div class="panel-heading">Update Price</div>
                        <div class="panel-body">
                            <form method="post" action="Addprice.php">
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
         <label for="Price">Price:</label>
         <input  type="number" name="price">
         <button type="submit" name="submit">Update</button>
        </form>
                        </div>
                        <div class="panel-footer">Thank you!!</div>
                    </div>
                </div>
            </div>
        </div><br>
    </center>
    </body>
</html>
