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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <title></title>
        <style>
            body {margin:0;}

.icon-baar {
  width: 100%;
  background-color: #286090;
  overflow: auto;
}

.icon-baar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-baar a:hover {
  background-color: #5bc0de;
}

.active {
  background-color: #a6e1ec;
}
table{
    border-collapse: collapse;
    width: 100%;
    color: brown;
    font-family:sans-serif;
    font-size: 25px;
    text-align: left;
    margin: 10px ;
}
th{
    background-color: #a6e1ec;
    color:white;
}
tr:nth-child(even){
    background-color: #f2f2f2;
}
        </style>
    </head>
    <body>
        
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
       <?php 
       $con= mysqli_connect('localhost','root','', 'canteen') or die(mysqli_error($con));
       $fetch= mysqli_query($con, 'select * from orders')or die(mysqli_error($con));
       ?>
        
            <?php  
                     if(isset($_POST['delet']) )   
                              {
                                      $key=$_POST['delivered'];
                                      $check = mysqli_query($con,"select * from orders where Sr_Num =$key ") or die("not found".mysqli_error($con));
                                      if(mysqli_num_rows($check)>0)
                                      {
                                          $delet="delete from orders where Sr_Num =$key;";
                                          $deletquery=mysqli_query($con,$delet) or die("not delete".mysqli_error($con));?>
                                             <div class='alert alert-warning'>
                                                  <P> record deleted!!</p>
                                             </div>
                                      }
                                      <?php    
                          header('location:receptionist.php');
                                      }
                                      else {
                                          ?>
                                           <div class='alert alert-warning'>
                                           <p> record does not exist!!</p>
                                           </div>
                               <?php       }
                              }
                              ?>
            
                
        </div>
        <table>
            <tr><th>Sr.No.</th>
                <th>Username</th>
                <th>Mobile no</th>
                <th>Ordername</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Delivered</th>
                <th>Delet</th>
            </tr>
            <?php 
            $sr=1;
                   while ($row= mysqli_fetch_array($fetch)){
            ?>
                <tr>
                <form action="receptionist.php" method="POST">
                    <td><?php    echo $row["Sr_Num"] ;?></td>
                    <td><?php    echo $row["Username"] ;?></td>
                    <td><?php    echo $row["Mobile_no"] ;?></td>
                    <td><?php    echo $row["Ordername"] ;?></td>
                    <td><?php    echo $row["Quantity"] ;?></td>
                    <td><?php    echo $row["Amount"] ;?></td>
                    <td><?php    echo $row["Date"] ;?></td>
                    <td><input type="checkbox" name="delivered" value="<?php echo $row['Sr_Num'];?>" required></td>
                    <td><input type="submit" name="delet" class="btn btn-warning"></td>
                </form>
                </tr>
                <?php
                 $sr++;  }
                   ?>
                
                
           
        </table>
    </body>
</html>
