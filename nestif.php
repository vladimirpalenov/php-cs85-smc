<!DOCTYPE html>
<html lang="en">
<head>
    <title>Assignment Title</title>
    <meta charset="utf-8">
</head>
<body>

<?php
//a variable to store a guess number
$guessNum = 2;
//the code in this if block is executed only when the number is greater or equal than 10 and smaller or equal than 25
if ($guessNum >= 10 && $guessNum <= 25){
    echo "<p>Number is between 10 and 25</p>";
}
// if the 1st argument wasn't met this else block is executed
else {
    //the code in this if block is executed only when the number is greater or equal than 5 and smaller than 10
    if ($guessNum >= 5 && $guessNum < 10) {
        echo "<p>Number is between 5 and 10</p>";
    }
    //the code in this elseif block is executed only when the number is greater or equal than 1 and smaller than 5
    elseif ($guessNum >= 1 && $guessNum < 5) {
        echo "<p>Number is between 1 and 5</p>";
    }
    //the code in this elseif block is executed only when the number is greater than 25
    elseif ($guessNum > 25) {
        echo "<p>Number is greater than 25</p>";
    }
    //the code in this elseif block is executed only when the number is 0 or less
    elseif ($guessNum <= 0) {
        echo "<p>Number is zero or negative</p>";
    }
}
?>

</body>
</html>

