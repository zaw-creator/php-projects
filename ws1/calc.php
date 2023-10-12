<?php

/* ======================================================
   PHP Calculator example using "sticky" form (Version 1)
   ======================================================
   Author : P Chatterjee (adopted from an original example written by C J Wallace)
   Purpose : To multiply 2 numbers passed from a HTML form and display the result.
   input:
      x, y : numbers
      calc : Calculate button pressed
   Date: 15 Oct 2007
*/

// grab the form values from $_HTTP_GET_VARS hash
extract($_GET);
$result;
$error = '';
// first compute the output, but only if data has been input
if(isset($calc)) { // $calc exists as a variable
//    $prod = $x * $y;
// $x = $_GET['x'];
//     $y = $_GET['y'];
    // $operator = $_GET['operator'];
    function cal(){

        global $x,$y,$operators,$result;
        
        // switch($operators){
        //         case "+":
        //             $result = $x + $y;
        //             $operators='+';
        //             break;
        //         case "-":
        //             $result = $x - $y;
        //             $operators='-';
        //             break;
        //         case "*":
        //             $result = $x * $y;
        //             $operators='*';
        //             break;
        //         case "/":
        //             $result = $x / $y;
        //             $operators='/';
        //             break;
        //         default:
        //             // Handle unexpected operator
        //             break;
        //     }
    
    
    
    
    }

    if (!is_numeric($x) || !is_numeric($y)) {
        $error = 'Please enter valid numeric values for both x and y.';
    } else {
        eval("\$result = $x $operators $y;");
        cal();
// switch($operators){
//     case "+":
//         $result = $x + $y;
//         break;
//     case "-":
//         $result = $x - $y;
//         break;
//     case "*":
//         $result = $x * $y;
//         break;
//     case "/":
//         $result = $x / $y;
//         break;
//     default:
//         // Handle unexpected operator
//         break;
// }

    }
}
else { // set defaults
   $x=0;
   $y=0;
   $result=0;
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Calculator Example</title>
    </head>

    <body>

       <h3>PHP Calculator (Version 1)</h3>
       <p>Caculate two numbers and output the result</p>

       <form method="get" action="<?php print $_SERVER['PHP_SELF']; ?>">

          x = <input type="text" name="x" size="5" value="<?php print $x; ?>"/>
        
          <select  id="operators" name="operators">
            <option value="+" <?php if ($operators === "+") echo "selected"; ?>>+</option>
            <option value="-" <?php if ($operators === "-") echo "selected"; ?>>-</option>
            <option value="*" <?php if ($operators === "*") echo "selected"; ?>>*</option>
            <option value="/" <?php if ($operators === "/") echo "selected"; ?>>/</option>

          </select>

          y =  <input type="text" name="y" size="5" value="<?php  print $y; ?>"/>


          <input type="submit" name="calc" value="Calculate"/>
          <!-- <input type="reset" name="clear" value="Clear"/> -->
       </form>
       <?php if (!empty($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
      <!-- print the result -->
      <?php 
      if(isset($calc)) {
        //   print "<p>x * y = $prod</p>";
        print"<p>Result: $result</p>";
      } 
      ?>

   </body>
</html>