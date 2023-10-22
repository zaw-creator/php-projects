<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string functions</title>
</head>
<body>
    <?php
     $first ="hehe";
     $second =" hoho";

$third =$first;
$third .= $second;
echo $third;
    ?>
    <br />
Lowercase: <?php  echo strtolower($third);?><br />
uppercase: <?php  echo strtoupper($third);?><br />
uppercase first: <?php  echo ucfirst($third);?><br />
uppercase words: <?php  echo ucwords($third);?><br />
<br />
Length: <?php  echo strlen($third);?> <br />
Trim: <?php echo "A" . trim("B,C,D") . "E" ?><br />
fIND : <?php echo strstr($third,"ho") ?> <br />
REPLACE : <?php echo str_replace("hehe","hihi", $third); ?>
<br />
repeat:<?php echo str_repeat($third,2); ?><br />
make substring: <?php echo substr($third,2,5);?><br />
find position: <?php echo strpos($third,"hoho"); ?><br />
find character <?php echo strchr($third,"o"); ?><br />
</body>
</html>