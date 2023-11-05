<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // exe1.
    // echo "<h1> Hello World</h1>"
// exe2
// $name= "Marry";
// $animal = "Lamb";

// echo "{$name} had a little {$animal}";
// exe3
// $var1 = array(1,"hehe",1.1,null);
    
//     foreach($var1 as $value){
// echo gettype($value)."<br />";
//  
if($_SERVER["REQUEST_METHOD"] == "POST"){
$selectedMonth = $_POST["month"];
$monthsAndSeasons = array(
    "January" => "Winter",
    "February" => "Winter",
    "March" => "Spring",
    "April" => "Spring",
    "May" => "Spring",
    "June" => "Summer",
    "July" => "Summer",
    "August" => "Summer",
    "September" => "Fall",
    "October" => "Fall",
    "November" => "Fall",
    "December" => "Winter"
);
echo "You selected: " . $selectedMonth . "<br>"; 
if (array_key_exists($selectedMonth, $monthsAndSeasons)) {
    $season = $monthsAndSeasons[$selectedMonth];
    echo "The season for $selectedMonth is $season.";
} else {
    echo "Invalid month selection.";
}
}


?>

<form action=""  method ="post"> 

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="month">Select a month:</label>
    <select id="month" name="month">
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
    </select>
    <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>