<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    <center>
        <form method="post" action="checkout.php">
        <div class="container" >
            <div class="row ">
                <div class="col-xs-6 col-xs-offset-3"  style="margin-top: 100px;">
                    <div class="panel panel-danger">
                        <div class="panel-heading"><h1><?php   echo $_POST["food"];  ?></h1></div>
                        <div class="panel-body">
                            <input type="text" name="Ordername" value="<?php  echo $_POST["food"];  ?>" class="hidden">
                            <input type="text" name="Quantity" value="<?php   echo $_POST["Quantity"];  ?>" class="hidden">
                            <p>Username:</p>
                            <input type="text" name="Username">
                            <p>Mobile no:</p>
                            <input type="text" name="Mobile">
                            
                            <br>
                            <p>Amount:</p>
                            <input type="text" name="amount" value="<?php $a=$_POST["Quantity"];
                                                                          $b=$_POST["Rs"];
                                                                          $c=$a*$b;
                                                                          echo $c; ?>" >
                            <br><br>
                            <button type="submit"  class="btn-primary btn-sm" name="submit"><h4>Pay</h4></button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div><br>
        </form>
    </center>
    </body>
</html>