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
    $ages = array(1,2,3,4,5);

    foreach( $ages as $age){
        echo "Age : {$age}"."<br />";
    }
    
    
    ?><br />
    <?php 
    
    $person = array("firstname" => "hhz","lastname" => "tlw");

    foreach($person as $att => $data){
        $attnice = ucfirst($att);
        echo"{$attnice}.{$data}<br />";
    }
    
    ?><br/>
    <?php 
    $price = array (
              "brand new pc" => 200,
              "brand new ph" => 10,
              "learning php" => null


    );
    foreach($price as $item => $value){
        echo "{$item}: ";
        if(is_int($value)){
            echo "$".$value;

        }else{
            echo "priceless";
        }
        echo "<br />";
    }
    
    
    ?>
</body>
</html>