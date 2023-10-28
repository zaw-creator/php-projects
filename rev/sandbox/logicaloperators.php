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
    $a=2;
    $b=1;
    $c=3;
    $d=2;
if (($a>$b)&&($c>$d)){
    echo "a and c is greater than b and d ";
}
    ?><br />
<?php
$e=200;
if(!isset($e)){
    $e= 100;


}
echo $e;

?><br />
<?php 
// dont reject 0 or 0.0
$value="";
if (empty($value) && (!is_numeric($value))){
    echo "you must enter a value;";
}

?>

</body>
</html>