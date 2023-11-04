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
    
    function paint($room="office",$color="red"){
        return "the color of the {$room} is {$color}.<br />";
    }

    echo paint();
    echo paint("bedroom","blue");
    echo paint("bedroom");
    echo paint("bedroom");

    
    ?>
</body>
</html>