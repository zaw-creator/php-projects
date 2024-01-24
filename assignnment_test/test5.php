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
    function arrayToXml($array, &$xml) {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                if (!is_numeric($key)) {
                    $subnode = $xml->addChild("$key");
                    arrayToXml($value, $subnode);
                } else {
                    $subnode = $xml->addChild("item$key");
                    arrayToXml($value, $subnode);
                }
            } else {
                $xml->addChild("$key", htmlspecialchars("$value"));
            }
        }
    }
        $access_key = "80f8e303ede7a6ba70377c0e3b86c163";
        $source_currency = "GBP";
        $target_currencies = 'AUD,BRL,CAD,CHF,CNY,DKK,EUR,HKD,HUF,INR,JPY,MXN,MYR,NOK,NZD,PHP,RUB,SEK,THB,TRY,USD,ZAR';
        
        $apiURL = "http://apilayer.net/api/live?access_key=$access_key&source=$source_currency&currencies=$target_currencies";

        $currencydata = file_get_contents($apiURL);

        if ($currencydata === false) {
            die('Error getting exchange rate data');
        }

        $currencydata = json_decode($currencydata, true);

        if ($currencydata === null) {
            die("Error decoding JSON data");
        }


        $modifiedCurrencyData = array();
        foreach ($currencydata['quotes'] as $currency => $rate) {
            $newCurrencyCode = substr($currency, 3);
            $modifiedCurrencyData[$newCurrencyCode] = $rate;
        }

        // Replace the original "quotes" array with the modified one
        $currencydata['quotes'] = $modifiedCurrencyData;


        // echo json_encode($currencydata, JSON_PRETTY_PRINT);

        if($currencydata['quotes']!== null){
            $xml = new SimpleXMLElement('<currency_data></currency_data>');
            $xml->addChild('timestamp', $currencydata['timestamp']);
    $xml->addChild('source', $currencydata['source']);
            arrayToXml($currencydata['quotes'], $xml);

            $xml->asXML('currency_data.xml');

            echo 'currency data has been stored in XML format';
        }
    ?>
</body>
</html>
