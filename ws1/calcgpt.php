<?php

/* ======================================================
   PHP Calculator example using "sticky" form (Version 2)
   ======================================================
   Author : P Chatterjee (adopted from an original example written by C J Wallace)
   Purpose : To perform basic arithmetic operations on 2 numbers passed from an HTML form and display the result.
   input:
      x, y : numbers
      calc : Calculate button pressed
      operator: selected arithmetic operator
   Date: 15 Oct 2007
*/

// grab the form values from $_GET hash
extract($_GET);

// first compute the output, but only if data has been input
if (isset($calc)) {
    // $calc exists as a variable
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
            // Check for division by zero
            if ($y != 0) {
                $result = $x / $y;
            } else {
                $result = "Cannot divide by zero";
            }
            break;
        default:
            $result = "Invalid operator";
    }
} else {
    // set defaults
    $x = 0;
    $y = 0;
    $result = 0;
    $operator = "+"; // Default operator
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator Example</title>
</head>

<body>

<h3>PHP Calculator (Version 2)</h3>
<p>Perform basic arithmetic operations on two numbers and display the result.</p>

<form method="get" action="<?php print $_SERVER['PHP_SELF']; ?>">

    x = <input type="text" name="x" size="5" value="<?php print $x; ?>"/>
    y = <input type="text" name="y" size="5" value="<?php print $y; ?>"/>

    <label for="operator">Select an operator:</label>
    <select id="operator" name="operator">
        <option value="+" <?php if ($operator == "+") echo "selected"; ?>>Addition (+)</option>
        <option value="-" <?php if ($operator == "-") echo "selected"; ?>>Subtraction (-)</option>
        <option value="*" <?php if ($operator == "*") echo "selected"; ?>>Multiplication (*)</option>
        <option value="/" <?php if ($operator == "/") echo "selected"; ?>>Division (/)</option>
    </select>

    <input type="submit" name="calc" value="Calculate"/>
    <input type="reset" name="clear" value="Clear"/>
</form>

<!-- print the result -->
<?php
if (isset($calc)) {
    print "<p>Result: $result</p>";
}
?>

</body>
</html>