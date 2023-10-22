<?php

// Read the text data into an array
$data = file("../ws3/quoes.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Initialize the HTML table
echo '<table border="1">';
echo '<tr><th>Quote</th><th>Source</th><th>Date of Birth - Date of Death</th><th>Wikipedia Link</th><th>Wikipedia Image</th><th>Category</th></tr>';

// Loop through each line and display the information
foreach ($data as $line) {
    // Split the line by the '|' character
    $parts = explode("|", $line);

    if (count($parts) == 6) {
        $quote = $parts[0];
        $source = $parts[1];
        $dobDod = $parts[2];
        $wplink = $parts[3];
        $wpimg = $parts[4];
        $category = $parts[5];

        // Add a new row to the table
        echo "<tr>";
        echo "<td>$quote</td>";
        echo "<td>$source</td>";
        echo "<td>$dobDod</td>";
        echo "<td><a href='$wplink' target='_blank'>$wplink</a></td>";
        echo "<td><img src='$wpimg' alt='Image' style='width: 150px; height: 150px; object-fit: cover; border-radius: 8px;'></td>";
        echo "<td>$category</td>";
        echo "</tr>";
    }
}

// Close the table
echo '</table>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">b
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/output.css">
    <title>Document</title>
</head>
<body>
    <div class="lesson-header">

    </div>
</body>
</html>