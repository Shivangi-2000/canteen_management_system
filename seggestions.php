<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="col-xs-6 col-xs-offset-3 " style="margin-top: 70px;">
            <div class="panel panel-danger">
                <div class="panel-heading" style="text-align:center;"><h4>Suggestions</h4></div>
                <div class="panel-body">
                    
                    <form method="post" action="">
                       
                        <div  class="form-group">
                            <label for="name"><h4>Name:</h4></label>
                            <input type="text" class="form-control " id="name" name="name" required>
                        </div>
                         <div  class="form-group">
                             <label for="email"><h4>Email:</h4></label>
                             <input type="email" class="form-control " id="email" name="email" required>
                        </div>
                        <div  class="form-group">
                             <label for="Mobile No"><h4>Mobile No:</h4></label>
                             <input type="text" class="form-control " id="Mobile" name="Mobile" required>
                        </div>    
                         <div  class="form-group">
                             <label for="suggestion"><h4>Suggestion:</h4>
                             <textarea cols="35" rows="5" name="comment" class="form-control "  required></textarea></label>
                         
                        </div>  
                        <button type="submit" value="submit" class="btn btn-info btn-sm" data-toggle="collapse" data-target="#h">Done</button>
                        <div id="h" class="collapse" style="align-self: center"><br><button type="submit" value="submit" class="btn btn-info btn-sm">submit</button></div>                     
                        
                    </form>
                </div>
                </div>
            </div>
       
    </body>
</html>
