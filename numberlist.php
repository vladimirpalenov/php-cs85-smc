<!DOCTYPE html>
<html lang="en">
<head>
    <title>Even Numbers</title>
    <meta charset="utf-8">
</head>
<body>

<?php
// this variable stores a current number, initially 1
$currentNumber = 1;
// iteration over the loop, until the $currentNumber value reaches 100
while ($currentNumber <= 100){
    //this block is executed only if the value of the $currentNumber is even
    if ($currentNumber % 2 == 0){
        //prints the value of the $currentNumber
        echo "<h2>$currentNumber</h2> ";
    }
    //$currentNumber value is incremented by 1
    $currentNumber++;
}

?>

</body>
</html>
