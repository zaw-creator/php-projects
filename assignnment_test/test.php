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
    $access_key = 'c349d13b967b9bab2b8770977579a5c8';
    // $basecurrency='GBP';

    $apiURL="http://data.fixer.io/api/latest?access_key=c349d13b967b9bab2b8770977579a5c8&%20symbols%20=%20USD";
    
    $currencydata= file_get_contents($apiURL);

    if($currencydata === false){
        die('Error getting exchange rate data');
    }

    $currencydata = json_decode($currencydata,true);

    if( $currencydata === null){
        die("error ");
    }
    echo json_encode($currencydata);
    ?>
</body>
</html>