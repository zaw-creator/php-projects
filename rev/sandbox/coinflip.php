<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function flip(){
        return (0 == rand(0,1)) ? 'H':'T';
    }


    
    ?>

    <div class="coin">

    <?php  echo flip()?>
    </div>
</body>
</html>