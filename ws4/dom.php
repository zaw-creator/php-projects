<?php
// Load XML file
$xml = new DOMDocument();
$xml->load('quotes.xml');

// Initialize the HTML table
$htmlTable = '<table style="border-collapse: collapse; width: 100%;" border="1" ';
$htmlTable .= '<tr><th>Quote</th><th>Source</th><th>Date of Birth - Date of Death</th><th>Wikipedia Link</th><th>Wikipedia Image</th><th>Category</th></tr>';

// Read data from XML and create table rows
$quotes = $xml->getElementsByTagName('quote');
foreach ($quotes as $quote) {
    $quoteText = $quote->getElementsByTagName('text')->item(0)->nodeValue;
    $source = $quote->getElementsByTagName('source')->item(0)->nodeValue;
    $dobDod = $quote->getElementsByTagName('dob-dod')->item(0)->nodeValue;
    $wplink = $quote->getElementsByTagName('wplink')->item(0)->nodeValue;
    $wpimg = $quote->getElementsByTagName('wpimg')->item(0)->nodeValue;
    $category = $quote->getElementsByTagName('category')->item(0)->nodeValue;

    $htmlTable .= "<tr>";
    $htmlTable .= "<td>$quoteText</td>";
    $htmlTable .= "<td>$source</td>";
    $htmlTable .= "<td>$dobDod</td>";
    $htmlTable .= "<td><a href='$wplink' target='_blank'>$wplink</a></td>";
    $htmlTable .= "<td><img src='$wpimg' alt='Image' style='max-width:100px;max-height:100px;'></td>";
    $htmlTable .= "<td>$category</td>";
    $htmlTable .= "</tr>";
}

// Close the table
$htmlTable .= '</table>';

// Output the generated HTML table
echo $htmlTable;
?>