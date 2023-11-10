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
    // echo "Hello". htmlspecialchars($_GET["name"]). '!';
    
    $parameters = array(
        'from' => 'GBP',
        'to' => 'JPY',
        'amnt' => 10.35,
        'format' => 'xml'
    );
    $url = 'http://localhost/web/rev/sandbox/test.php/?' . http_build_query($parameters);
    echo "Generated URL: " . $url;
    echo '<a href="' . $url . '" target="_blank">Generated URL</a>';
    ?>
</body>
</html>