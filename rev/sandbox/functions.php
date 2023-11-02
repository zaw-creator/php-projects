<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function say_hello(){
        echo "hello world!<br />";
    }
    say_hello();
    function say_hello_to($word){
        echo "Hello {$word}";
    }
    say_hello_to("thiri la wonn");  
    // note that u can define the function after calling it but for the goood coding practise better called it first.
    ?>
</body>
</html>