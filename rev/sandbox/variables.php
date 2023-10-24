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
    $num1=1;
    echo $num1;
 echo "<br />";
$num1 =2;
echo $num1;

echo "hello world <br />";
echo 'hello world <br />';

$greeeting ="hello";
$target="han hto zaw";

$sum = $greeeting . " " . $target;

$var1= "hhz";
$var2= "tlw";

$plus = $var1.$var2;

echo $plus;


echo $sum;
    ?>
    <br />
    <?php
echo "$sum again <br /> ";
echo "{$sum}again";
?>
    
</body>
</html>