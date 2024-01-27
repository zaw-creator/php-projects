<?php

@date_default_timezone_set("GMT");
// Load currency_data.xml
$currency_data = simplexml_load_file('currency_data.xml');


// Load currency_countries.xml
$currency_countries = simplexml_load_file('currency_countries.xml');



// Remove unwanted characters from timestamp and base attributes
$timestamp = str_replace(["\n", "\t"], '', $currency_data->timestamp);
$base = str_replace(["\n", "\t"], '', $currency_data->source);

$rates_xml = new SimpleXMLElement('<rates></rates>');
$rates_xml->addAttribute('ts', $timestamp);
$rates_xml->addAttribute('base', $base);








$rates_xml->asXML('rates.xml');

echo 'Merged data has been stored in rates.xml';
?>
