<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floats</title>
</head>
<body>
    
<?php  echo $float =3.14; ?> <br />
<?php echo $float + 7;?> <br />
<?php echo 4/3; ?> <br />

Round: <?php echo round ($float, 1); ?> <br />
Ceiling <?php echo ceil($float); ?> <br />
Floor <?php echo floor($float); ?><br />
<?php $interger=3;?>

<?php echo "Is {$interger} interger?" . is_int($interger); ?><br />
<?php echo "Is {$float} interger?" . is_int($float); ?><br />
<?php echo "Is {$interger} float?" . is_float($interger); ?><br />
<?php echo "Is {$float} float?" . is_float($float); ?><br />
<?php echo "Is {$interger} numeric?" . is_int($interger); ?><br />
<?php echo "Is {$float} numeric?" . is_int($float); ?><br />




</body>
</html>