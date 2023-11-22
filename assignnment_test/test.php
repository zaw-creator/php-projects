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
    // $access_key = 'c349d13b967b9bab2b8770977579a5c8';
    // $basecurrency='GBP';

    $apiURL="http://data.fixer.io/api/latest?access_key=c349d13b967b9bab2b8770977579a5c8&%20symbols%20=%20USD";
    // $access_key ="80f8e303ede7a6ba70377c0e3b86c163"; 
    // $apiURL="http://apilayer.net/api/live?access_key=80f8e303ede7a6ba70377c0e3b86c163&source=GBP&currencies=EUR,USD,CAD,PLN&mode=xml";
    $currencydata= file_get_contents($apiURL);

    if($currencydata === false){
        die('Error getting exchange rate data');
    }

    $currencydata = json_decode($currencydata,true);

    if( $currencydata === null){
        die("error ");
    }
    //  can watch at php.net about the flags lol a bit confusing.
    echo json_encode($currencydata, JSON_FORCE_OBJECT | JSON_PRETTY_PRINT);

    ?>


</body>
</html>