<!DOCTYPE html>
<head>
    <title>Cost Per Square Foot Area Function</title>
</head>
<body>
<h2>Total Property Cost Calculator</h2>

<?php
// Values assigned to variables storing length, width and cost per sqare ft
$length = 20;

$width = 4;

$ftCost = 75;

//rArea() function
//Takes length and width as arguments and returns area
function rArea($length, $width){
    return $length * $width;
}

//call function rArea() in a message
echo "A room of length " . $length . "ft and width " . $width . "ft has an area of " . rArea($length ,$width ) .". ";



//totalCost() function
//akes length, width and cost per sq ft as arguments and returns total cost of property
function totalCost($length, $width, $ftCost){
    return rArea($length, $width) * $ftCost;
}


//call function totalCost() in a message
echo "The total cost of a room of length " .  $length . "ft and width " . $width . "ft area at $" . $ftCost  . "per square foot is " . totalCost($length ,$width,$ftCost) .".";

?>
</body>
</html>
