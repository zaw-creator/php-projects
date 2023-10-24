<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  $numbers = array(1,22,33,450,63);?>

    count: <?php echo count($numbers);?> <break>
    max: <?php echo max($numbers);?> <break>
    min: <?php echo min($numbers);?> <break>

    sort: <?php echo sort($numbers);  print_r($numbers); ?><br />
    reverse sort: <?php echo rsort($numbers);  print_r($numbers); ?><br />

    implode: <?php echo $num_string = implode(" * ", $numbers); ?><br />
   explode:<?php print_r(explode(" * ", $num_string)); ?><br />

   22 in array?: <?php echo in_array(22, $numbers) ?><br />
   19 in array? <?php echo in_array(19, $numbers); ?><br /> 


</body>
</html>