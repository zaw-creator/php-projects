<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function check_capacity($capacity,$attendee = 0){

        if($attendee>$capacity){
return "the tickets for the event are sold out";
        }else{
            return "there are still tickets left <br />";
        }
    }

    // check_capacity(10,50);
    
    $venues = array (
        "thuwanabumi" =>  [100,50],
        "mict" =>  [100,500],

    );
    foreach($venues as $place => $numbers){
        echo $place . " " . check_capacity($numbers[0],$numbers[1]). "<br />";  
    }
    ?>
</body>
</html>