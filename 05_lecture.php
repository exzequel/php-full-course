<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="05_lecture.php" method="post">
        <label for="">x: </label>
        <input type="text" name="x">
        <label for="">y: </label>
        <input type="text" name="y">
        <label for="">z: </label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>

</html>
<?php
$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['z'];

$total = null;

// PHP Math Functions
// $total = abs($x); // return absolute value
// $total = round($x); // round to nearest value
// $total = floor($x); // always round down
// $total = ceil($x); // always round up
// $total = pow($x, $y); // raise a base (x) to given power (y)
// $total = sqrt($x); // return square root of given value
// $total = max($x, $y, $z); // return greatest value between a set of numbers
// $total = min($x, $y, $z); // return lowest value between a set of numbers
//$total = pi(); // print the value of pi
// $total = rand(1, 6); // returns a random number from a selected range

echo $total;
?>