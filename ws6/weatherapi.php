<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 


    
function getWeather($apiKey, $city) {
    $baseUrl = "https://api.openweathermap.org/data/2.5/weather";
    $queryParams = [
        'q' => $city,
        'appid' => $apiKey,
    ];

    $url = $baseUrl . '?' . http_build_query($queryParams);

    try {
        $response = file_get_contents($url);
        $weatherData = json_decode($response, true);
        return $weatherData;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return null;
    }
}

function arrayToXml($array, &$xml) {
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $subnode = $xml->addChild($key);
            arrayToXml($value, $subnode);
        } else {
            $xml->addChild("$key", htmlspecialchars("$value"));
        }
    }
}

function main() {
    // Replace 'YOUR_API_KEY' with your actual API key
    $apiKey = 'e978a17a27e1282ed77767f16c33954b';
    $city = 'Bristol,uk';  // Replace with the desired city

    $weatherData = getWeather($apiKey, $city);

    if ($weatherData !== null) {
        // Create XML structure
        $xml = new SimpleXMLElement('<weather_data></weather_data>');
        arrayToXml($weatherData, $xml);

        // Save XML to a file
        $xml->asXML('weather_data.xml');

        echo 'Weather data has been stored in XML format.';
    }
}

main();


    




?>
</body>
</html>