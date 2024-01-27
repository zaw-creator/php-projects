<?php

// Load currency_data.xml
$currency_data = simplexml_load_file('currency_data_1.xml');

// Load currency_countries.xml
$currency_countries = simplexml_load_file('currency_countries.xml');

// Create rates XML
$rates_xml = new SimpleXMLElement('<rates></rates>');
$rates_xml->addAttribute('ts', htmlspecialchars($currency_data->timestamp));
$rates_xml->addAttribute('base', htmlspecialchars($currency_data->source));

// Loop through currency_data entries
foreach ($currency_data->children() as $currency_code => $rate) {
    if ($currency_code != 'timestamp' && $currency_code != 'source') {
        // Find the corresponding entry in currency_countries
        $currency_country_entry = $currency_countries->xpath("//Ccy[Ccy = '$currency_code']/parent::*")[0];

        // Create currency element in rates XML
        $currency_element = $rates_xml->addChild('currency');
        $currency_element->addAttribute('rate', htmlspecialchars((string)$rate));
        $currency_element->addAttribute('live', '0');
        $currency_element->addChild('code', htmlspecialchars((string)$currency_code));
        $currency_element->addChild('curr', htmlspecialchars((string)$currency_country_entry->CcyNm));
        $currency_element->addChild('loc', htmlspecialchars((string)$currency_country_entry->CtryNm));
    }
}

// Save rates XML to file
$rates_xml_str = $rates_xml->asXML();
$rates_xml_str = html_entity_decode($rates_xml_str);
$rates_xml_str = preg_replace('/\s+/S', ' ', $rates_xml_str);

file_put_contents('rates.xml', $rates_xml_str);

echo 'Merged data has been stored in rates.xml';
?>
