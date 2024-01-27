<?php

// Load currency_data.xml
$currency_data = simplexml_load_file('currency_data_1.xml');

// Load currency_countries.xml
$currency_countries = simplexml_load_file('currency_countries.xml');

// Create rates XML
$rates_xml = new SimpleXMLElement('<rates></rates>');
$rates_xml->addAttribute('ts', $currency_data->timestamp);
$rates_xml->addAttribute('base', $currency_data->source);

// Loop through currency_countries entries
foreach ($currency_countries->CcyNtry as $country_entry) {
    $currency_code = (string)$country_entry->Ccy;
    
    // Check if currency code exists in currency_data
    if (isset($currency_data->{$currency_code})) {
        // Get the rate from currency_data
        $rate = (string)$currency_data->{$currency_code};

        // Create currency element in rates XML
        $currency_element = $rates_xml->addChild('currency');
        $currency_element->addAttribute('rate', $rate);
        $currency_element->addAttribute('live', '0');
        $currency_element->addChild('code', $currency_code);
        $currency_element->addChild('curr', (string)$country_entry->CcyNm);
        $currency_element->addChild('loc', (string)$country_entry->CtryNm);
    }
}

// Save rates XML to file
$rates_xml->asXML('rates.xml');

echo 'Merged data has been stored in rates.xml';
?>
