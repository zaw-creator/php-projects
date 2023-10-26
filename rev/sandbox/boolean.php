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
    $result1 =true;
    $result2 = false;

    echo $result1."<br />";
    echo $result2;

    
    
    ?>

   resut2 is boolean? <?php  echo is_bool($result2);  ?><br />
<?php 
$num=3;
if( is_float($num)){
    echo "it is float";
}else{
    echo "it is not";
}
?>

</body>
</html>