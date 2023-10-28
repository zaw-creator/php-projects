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
    $max_width = 980;

    define("MAX_WIDTH", 980);
    echo MAX_WIDTH;
    
    ?><br />
    <?php // note u cant chg the value of the constats

//   MAX_WIDTH  1

//   echo MAX_WIDTH;
  ?>
  <?php // CANT REDEFINE IT
//   define ("MAX_WIDTH", 990);
//   echo MAX_WIDTH;
  ?>
</body>
</html>