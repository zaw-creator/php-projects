<?php

// Load currency_data.xml (containing currency rates)
$currency_data = simplexml_load_file('currency_data_1.xml');

// Load currency_countries.xml (containing currency names)
$currency_countries = simplexml_load_file('currency_countries.xml');

// Create rates XML
$rates_xml = new SimpleXMLElement('<rates></rates>');
$rates_xml->addAttribute('ts', htmlspecialchars($currency_data->timestamp));
$rates_xml->addAttribute('base', htmlspecialchars($currency_data->source));

// Function to get currency name based on code
function getCurrencyName($code, $currency_countries) {
    foreach ($currency_countries->CcyTbl->CcyNtry as $currency_entry) {
        if ((string)$currency_entry->Ccy == $code) {
            return (string)$currency_entry->CcyNm;
        }
    }
    return '';
}

function updatelive($currency_code) {
    $currencies_to_update = ['AUD', 'BRL', 'CAD', 'CHF', 'CNY', 'DKK', 'EUR', 'GBP', 'HKD', 'HUF', 'INR', 'JPY', 'MXN', 'MYR', 'NOK', 'NZD', 'PHP', 'RUB', 'SEK', 'SGD', 'THB', 'TRY', 'USD', 'ZAR'];

    return in_array($currency_code, $currencies_to_update) ? '1' : '0';
}

// Loop through currency_data entries
foreach ($currency_data->children() as $currency_code => $rate) {
    if ($currency_code != 'timestamp' && $currency_code != 'source') {
        // Get currency name
        $currency_name = getCurrencyName($currency_code, $currency_countries);

        // Create currency element in rates XML
        $currency_element = $rates_xml->addChild('currency');

        $currency_element->addAttribute('rate', htmlspecialchars((string)$rate));
        $currency_element->addAttribute('live', updatelive($currency_code));
        $currency_element->addChild('code', htmlspecialchars((string)$currency_code));
        $currency_element->addChild('curr', htmlspecialchars($currency_name));
    }
}

// Save rates XML to file
$rates_xml_str = $rates_xml->asXML();
$rates_xml_str = html_entity_decode($rates_xml_str);
$rates_xml_str = preg_replace('/\s+/S', ' ', $rates_xml_str);
file_put_contents('rate.xml', $rates_xml_str);

echo 'Merged data has been stored in rate.xml';
?>
