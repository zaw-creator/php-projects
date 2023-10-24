<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   $array = ["first_name" => "hhz","last_name" => "tlw"]; 
    echo $array["first_name"]."<br />"; 
    echo $array["first_name"]." ".$array["last_name"];

    echo $array["first_name"] ="han htoo zaw"."<br />"; 
    echo $array["first_name"]." ".$array["last_name"]."<br />";
?>
    <?php $numbers = array(4,8,12); ?>
    <?php $numbers = array(1=>4,2=>8,3=>12);
    
    echo print_r($numbers);
    
    ?>



    
    
    


</body>
</html>