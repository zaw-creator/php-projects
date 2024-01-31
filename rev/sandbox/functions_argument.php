<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function say_hello_to($word){
        echo "Hello {$word}";
    }
    // say_hello_to("thiri la wonn");  
    $name= "thal pu";
    say_hello_to($name);
    ?><br />
    <?php 
    
    function better_hello($greeting,$target,$punct){
        echo $greeting." ".$target.$punct."<br />";
    }
    better_hello("hello", $name , "!");
    // if you dont want to add the value for the argumetns put null.
    better_hello("hello", $name , null);

    
    ?>
</body>
</html>