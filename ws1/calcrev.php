<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function caculate($x,$y,$operator){
    switch ($operator) {
        case "+":
            $result = $x + $y;
            break;
        case "-":
            $result = $x - $y;
            break;
        case "*":
            $result = $x * $y;
            break;
        case "/":
            // Check if the denominator is not zero before division
            if ($y != 0) {
                $result = $x / $y;
            } else {
                $result = "Cannot divide by zero";
            }
            break;
        default:
            $result = "Invalid operator";
            break;
    }
    return $result;
}

extract($_GET);

$error = '';

// Validate input as numeric values
if (isset($calc)) {
    if (is_numeric($x) && is_numeric($y)) {
            $result= caculate($x,$y,$operator);
    } else {
        $error = "Please enter valid numeric values for both x and y.";
    }
} else { // set defaults
    $x = 0;
    $y = 0;
    $result = 0;
    $operator = "";
}

?>
<h3>PHP Calculator (Version 1)</h3>


<?php
if (!empty($error)) {
    echo "<p style='color: red;'>Error: $error</p>";
}
?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    x = <input type="text" name="x" size="5" value="<?php echo $x; ?>"/>
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    y =  <input type="text" name="y" size="5" value="<?php echo $y; ?>"/>
    <input type="submit" name="calc" value="Calculate"/>
</form>

<?php
echo "Result: $result";
?>
</body>
</html>
