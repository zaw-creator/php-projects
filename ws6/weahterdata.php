<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php

    function displayWeatherData() {
        $xmlFile = 'weather_data.xml';

        if (file_exists($xmlFile)) {
            $xml = simplexml_load_file($xmlFile);

            echo '<table>';
            foreach ($xml->children() as $element) {
                echo '<tr>';
                echo '<th>' . ucfirst($element->getName()) . '</th>';
                echo '<td>' . htmlspecialchars($element) . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo 'Weather data XML file not found.';
        }
    }

    displayWeatherData();

    ?>
</body>
</html>
