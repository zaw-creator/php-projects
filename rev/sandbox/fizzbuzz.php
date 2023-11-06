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
    

    for($count = 0; $count <= 100; $count++){
        if ($count % 3 == 0 && $count % 5 == 0) {
            echo "FizzBuzz, ";
        } elseif ($count % 3 == 0) {
            echo "Fizz, ";
        } elseif ($count % 5 == 0) {
            echo "Buzz, ";
        } else {
            echo $count . ", ";
        }
    }
  ?>
</body>
</html>