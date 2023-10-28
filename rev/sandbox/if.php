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
    $a= 2;
    $b=3;

    if ($a>$b){
        echo "a ka b htet kye tl";
    }else{
        echo "ma kye bu";
    }
    
    ?>
<br />
<?php
$newuser= true;
if ($newuser){

    echo"<h1>Welcome! ! !</h1>";
    echo"<p>Welcome to our website:</p>";
}
?>
<br />
<?php 
// read note from the notebook titl: cant divided by zero !! ( if satement) else ka ko hr ko yay htr
$numerator= 20;
$denominator =0;
// $result=0;

if ($denominator > 0 ){

    $result = $numerator / $denominator ;  
}else{
    echo "cant divided by zero!";
}
// echo "result:".$result;
?>


 </body>
 </html>