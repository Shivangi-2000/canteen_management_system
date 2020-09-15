
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
        <?php
        // put your code here
        ?> 
    <center><br>
         <div class="col-xs-4 col-xs-offset-3 " style="margin-top:75px; margin-left: 25%;">
            <div class="panel panel-danger">
                <div class="panel-heading">CHOOSE</div>
                <div class="panel-body">
                    <form method="post" action="menu.php">
            <div  class="form-group">
                            
                <button type="submit" class="btn-warning btn-xs" id="customer" name="customer" style="font-size:20px">Customer</button>
            </div>
                    </form><br>
                    <form method="post" action="receptionist.php">
            <div  class="form-group">
                         
                <button type="submit" class="btn-warning btn-xs" id="Receptionist" name="Receptionist"style="font-size:20px">Receptionist</button>
            </div><br>
         </form>
                </div>
            </div>
         </div>
    </center>
    </body>
         
    </body>
</html>

