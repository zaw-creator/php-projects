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
   $var1=2;
   $var2=3;

   echo ((1+2+ $var1 ) * $var2) /5-2; 



    ?><br />
    absolute value: <?php  echo abs(0-300);?><br />
    expoential <?php echo pow(2,8); ?><br />
    square root <?php echo sqrt(100);?> <br />
    modulo <?php echo fmod(20,7); ?> <br />
    randim <?php echo rand(); ?> <br />
    Random (min.max); <?php echo rand(1,10); ?><br />

    +=: <?php $var2 += 4;  echo $var2; ?><br />
    -=: <?php $var2 -= 2;  echo $var2; ?><br />
    *=: <?php $var2 *= 4;  echo $var2; ?><br />
    /=: <?php $var2 /= 3;  echo $var2; ?><br />

increment: <?php  $var2++ ; echo$var2;?><br />
decrement: <?php $var2--; echo$var2;?> <br />

loop :<?php 
    for($i=0;$i<=10 ;$i++){
        echo "number ".$i;
        echo "<br />";
    }
?>

</body>
</html>