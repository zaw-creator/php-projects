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
    function add_subt($val1,$val2){
        $add= $val1+$val2;
        $subt= $val1-$val2;

        return array($add,$subt);
    }
    $array = add_subt(10,5);

    echo"add: ".$array[0]."<br />";
    echo"Subt: ".$array[1]."<br />";

?>
</body>
</html>