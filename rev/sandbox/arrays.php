<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    $intergers = array(0,1,2,3,4,5);
      echo $intergers[1]. "<br />";
    $mized = array(0,"hhz","tlw",array("hehe",1));
    echo $mized[3][0];
    ?>

    <?php $mized[4] ="cat" ?>
    <?php $mized[] ="dog" ?>
<?php 
$hehe =[1,2,3];

echo print_r($hehe);
?>
    <pre>
    <?php echo print_r($mized); ?>
</pre>
</body>
</html>