<?php

function convertCurrency($from, $to, $amount) {
    // Load the rate.xml file
    $rate_data = simplexml_load_file('rate.xml');

    if ($rate_data === false) {
        die('Error loading rate.xml');
    }

    $from_rate = null;
    $to_rate = null;

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

    // Debugging output
    echo "Checking: $from\n";
    echo "Checking: $to\n";
    echo "From Rate: $from_rate\n";
    echo "To Rate: $to_rate\n";

    // Check if rates were found
    if ($from_rate !== null && $to_rate !== null) {
        // Convert the amount
        $converted_amount = $amount * ($to_rate / $from_rate);

        // Output the converted amount
        echo "Converted amount: $converted_amount $to";
    } else {
        // Rates not found
        echo "Converted amount: Error: Unable to find rates for conversion. $to";
    }
}


// Example usage
convertCurrency('GBP', 'AED', 10);

?>
