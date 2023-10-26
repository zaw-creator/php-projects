<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    type juggling <br />

    <?php
    $count = "2";
    ?>
    type <?php echo gettype($count);?><br />

    <?php $count +=3;?>
    type:<?php echo gettype($count); ?> <br />

    <?php $cats="I have". $count ."cats";?>
    cats:<?php echo gettype($cats);?><br />

    type casting <br />
    <?php 
    settype($count, "integer");
    ?><br />
    count:<?php echo gettype($count);?><br />
<?php 
$count2= (string) $count;
?>
count:<?php echo gettype($count);?><br />
count2:<?php echo gettype($count2);?>


<?php $test1=3;?><br />
<?php $test2=3;?><br />
<?php settype($test1,"string");?>
<?php $test2=(string) $test2;?> <br /> 
<!-- need to assign $test2=(string) $test2 -->

test 1:<?php echo gettype($test1);?><br />
test 2:<?php echo gettype($test2);?>


</body>
</html>