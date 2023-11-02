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
    function add($val1,$val2){
       return  $val1 + $val2;
    // return $sum;
        // echo $sum;
    }
echo add(1,2);
//  $result1=    add(3,4);
//  $result2= add($result1,5);
//  echo $result2;
    


    
    
    ?><br />

    <?php 
       function chinese_zodiac($year){

        switch(($year -4) % 12){
            case 0;return "rat"; 
            case 1; return  "ox"; 
            case 2; return  "tiger"; 
            case 3; return  "rabbit"; 
            case 4; return  "dragon"; 
            case 5; return  "snake"; 
            case 6; return  "horse"; 
            case 7; return  "goat"; 
            case 8; return  "monkey"; 
            case 9; return  "rooster"; 
            case 10; return  "dog"; 
            case 11; return  "pig"; 
        }    
       }
    $zodiac = chinese_zodiac(2013);
    echo "this year is {$zodiac}<br />";

    
    echo "this year is ". chinese_zodiac(2013)."<br />";
    
    ?>
</body>
</html>