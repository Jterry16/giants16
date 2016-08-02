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
         First Name <?php echo $_POST["firstname"]; ?><br>
         Last Name <?php echo $_POST["lastname"]; ?>
 
        Email Address is <?php echo $_POST["emailaddress"]; ?><br>
        Create Password is <?php echo $_POST["createpassword"]; ?>
 
        Phone Number is  <?php echo $_POST["phonenumber"]; ?><br>
        City is <?php echo $_POST["city"]; ?>
 
        State/region is <?php echo $_POST["state/region"]; ?><br>
        Zip Code is <?php echo $_POST["zipcode"]; ?>
 
        Billing Address is <?php echo $_POST["billingaddress"]; ?><br>

    </body>
</html>
