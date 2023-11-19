<?php

$api_url = "https://api.currencylayer.com/convert";  // Replace with your actual API endpoint

// Replace with your API key, if required by your API
$api_key = "80f8e303ede7a6ba70377c0e3b86c163";

$from_currency = isset($_GET['from_currency']) ? strtoupper($_GET['from_currency']) : "USD";
$to_currency = isset($_GET['to_currency']) ? strtoupper($_GET['to_currency']) : "GBP";  // Default to GBP
$amount = isset($_GET['amount']) ? floatval($_GET['amount']) : 100;

// Build the API request URL
$request_url = "$api_url?api_key=$api_key&from=$from_currency&to=$to_currency&amount=$amount";

// Initialize cURL session
$ch = curl_init($request_url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Decode the JSON response
$result = json_decode($response, true);

// Check if the API request was successful
if ($result && isset($result['success']) && $result['success']) {
    // Check if the 'result' key exists
    if (isset($result['result'])) {
        $converted_amount = $result['result']['converted_amount'];
        echo "$amount $from_currency is equal to $converted_amount $to_currency";
    } else {
        // Adjust this part based on the actual structure of your API response
        echo 'Error: Missing "result" key in API response. Response: ' . print_r($result, true);
    }
} else {
    // Handle API error and print the response
    echo 'Error: Unable to retrieve exchange rate. Response: ' . print_r($result, true);
}

?>
