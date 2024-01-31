<?php

function convertCurrency($from, $to, $amount) {
    // Load the rate.xml file
    $rate_data = simplexml_load_file('rate.xml');

    if ($rate_data === false) {
        die('Error loading rate.xml');
    }

    // Load currency_countries.xml (containing currency names and locations)
    $currency_countries = simplexml_load_file('currency_countries.xml');

    if ($currency_countries === false) {
        die('Error loading currency_countries.xml');
    }

    $from_rate = null;
    $to_rate = null;
    $from_curr_info = getCurrencyInfo($from, $currency_countries);
    $to_curr_info = getCurrencyInfo($to, $currency_countries);

    // Find the rates for the specified currencies
    foreach ($rate_data->currency as $currency) {
        // Trim the currency code for comparison
        $current_currency_code = strtoupper(trim((string)$currency->code));
        $from_upper = strtoupper($from);
        $to_upper = strtoupper($to);

        if ($current_currency_code === $from_upper) {
            $from_rate = (float)$currency['rate'];
        } elseif ($current_currency_code === $to_upper) {
            $to_rate = (float)$currency['rate'];
        }
    }

    // Check if rates were found
    if ($from_rate !== null && $to_rate !== null) {
        // Convert the amount
        $converted_amount = $amount * ($to_rate / $from_rate);

        // Create XML structure
        $conv_xml = new SimpleXMLElement('<conv></conv>');
        $conv_xml->addChild('at', date('d M Y H:i'));
        $conv_xml->addChild('rate', $to_rate);

        $from_element = $conv_xml->addChild('from');
        $from_element->addChild('code', $from);
        $from_element->addChild('curr', htmlspecialchars($from_curr_info['curr']));
        $from_element->addChild('loc', htmlspecialchars(implode(', ', $from_curr_info['loc'])));
        $from_element->addChild('amnt', $amount);

        $to_element = $conv_xml->addChild('to');
        $to_element->addChild('code', $to);
        $to_element->addChild('curr', htmlspecialchars($to_curr_info['curr']));
        $to_element->addChild('loc', htmlspecialchars(implode(', ', $to_curr_info['loc'])));
        $to_element->addChild('amnt', $converted_amount);

        // Output the XML
        header('Content-Type: text/xml');
        echo $conv_xml->asXML();
    } else {
        // Rates not found
        echo "Converted amount: Error: Unable to find rates for conversion. $to";
    }
}

// Function to get currency info based on code
function getCurrencyInfo($code, $currency_countries) {
    $data = ['curr' => '', 'loc' => []];
    foreach ($currency_countries->CcyTbl->CcyNtry as $currency_entry) {
        if ((string)$currency_entry->Ccy == $code) {
            $data['curr'] = (string)$currency_entry->CcyNm;
            $data['loc'][] = (string)$currency_entry->CtryNm;
        }
    }
    return $data;
}

// Get parameters from URL
$from = isset($_GET['from']) ? $_GET['from'] : null;
$to = isset($_GET['to']) ? $_GET['to'] : null;
$amount = isset($_GET['amnt']) ? $_GET['amnt'] : null;

// Example usage
convertCurrency($from, $to, $amount);

?>
