<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$ages = array (11,2,3,4,5);

echo "1:" . current($ages) . "<br />";
    next($ages);
    echo "2:".current($ages)."<br />";
    next($ages);
    next($ages);
    echo "3:".current($ages)."<br />";
    prev($ages);
    echo "2.3:".current($ages)."<br />";
    reset($ages);
    echo "2.3:".current($ages)."<br />";
    end($ages);
    echo "2.3:".current($ages)."<br />";
    next($ages);
    echo "2.3:".current($ages)."<br />";
    ?><br />
    <?php 
    reset($ages);
    while($age = current($ages)){
        echo $age . ", ";
        next($ages);
    }
    ?>

</body>
</html>