<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a=11;
// break is important
    switch($a){
        case 0;
        echo "a equals 0<br />";
        break;
        case 1;
        echo "a equals 1<br />";
        break;
        case 2;
        
        echo "a equals 2<br />";
        break;
        case 3;
        echo "a equals 3<br />";
        break;
        default;
        echo "a is none of these";
        break;
    }
    
    
    ?> <br />

    <?php 
    $year=2013;

    switch(($year -4) % 12){
        case 0;$zodiac= "rat"; break;
        case 1;$zodiac= "ox"; break;
        case 2;$zodiac= "tiger"; break;
        case 3;$zodiac= "rabbit"; break;
        case 4;$zodiac= "dragon"; break;
        case 5;$zodiac= "snake"; break;
        case 6;$zodiac= "horse"; break;
        case 7;$zodiac= "goat"; break;
        case 8;$zodiac= "monkey"; break;
        case 9;$zodiac= "rooster"; break;
        case 10;$zodiac= "dog"; break;
        case 11;$zodiac= "pig"; break;



    }
    echo "{$year}is the year of{$zodiac} ";
    
    ?><br />
    <?php 
    $user="customer ";

    switch($user){
        case"student";
        echo "greeting";
        break;
        case"press";
        case"customer";
        echo"hi";
        break;
        default;
        echo "no register user";        
    }
    
    ?>
</body>
</html>