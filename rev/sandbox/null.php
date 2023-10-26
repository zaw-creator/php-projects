<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $var1 = null;
    $var2 = "";

    echo is_null($var1)."var1"."<br />";
    echo is_null($var2)."var2"."<br />";
    echo is_null($var3)."var3"."<br />";
    
   ?>
   <br />
   var 1 is set? <?php echo isset($var1);?>
   var 2 is set? <?php echo isset($var2);?>
   var 3 is set? <?php echo isset($var3);?>

   <br />
<?php $var3="0";?>
   var1 empty?<?php
   // empty "",0,0.0,"0",flse,array() 
   echo empty($var1); ?><br />
   var2 empty?<?php echo empty($var2); ?><br />
   var3 empty?<?php echo empty($var3); ?><br />


    
</body>
</html>