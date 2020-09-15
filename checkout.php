<?php
        // put your code here
if(isset($_POST['amount']))
{
    $amount=$_POST['amount'];
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
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $con= mysqli_connect('localhost','root','', 'canteen') or die(mysqli_error($con));
            if(isset($_POST['submit']))
            {
                 
              $Username= $_POST['Username'];
              $Mobile= $_POST['Mobile'];
              $Ordername=$_POST['Ordername'];
              $Quant=$_POST['Quantity'];
              $rupye=$_POST['amount'];
              $Order_insertion_query="INSERT INTO `orders` (`Username`, `Mobile_no`,`Ordername`,`Quantity`,`Amount`) VALUES ('$Username', '$Mobile','$Ordername','$Quant','$rupye');";
            
              $Order_insertion_submit= mysqli_query($con, $Order_insertion_query) or die(mysqli_error($con));
			}
        
        ?>
        <form method="post" action="paytm/PaytmKit/pgRedirect.php">
		<table border="1">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo  "ASRZQ" . rand(10000,99999999)?>"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
                                        <td><input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
                                        <td><input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
                                                value="<?php echo $amount; ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>
    </body>
</html>
