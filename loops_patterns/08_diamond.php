<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Enter (n) number of rows: </label>
        <input type="number" name="n">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php
// DIAMOND PATTERN

$n = $_POST['n'];

// Start from square pattern
// UPPER PYRAMID
for ($i = 1; $i < $n; $i++) {
    // decreasing space
    // set first condition to $I
    for ($j = $i; $j <= $n; $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    // increasing star
    // set second condition to < $i (minus 1 to print the peak)
    for ($j = 1; $j < $i; $j++) {
        echo "* ";
    }
    // increasing star
    // set second condition to <= $i
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br />";
}

// LOWER PYRAMID
// rows (outer loop)
for ($i = 1; $i <= $n; $i++) {
    // increasing space
    // set second condition to <= $i
    for ($j = 1; $j <= $i; $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    // decreasing star
    // set first condtion to = $i
    // set second condtion to < $n (one less)
    for ($j = $i; $j < $n; $j++) {
        echo "* ";
    }
    // decreasing star
    // set first condtion to = $i
    for ($j = $i; $j <= $n; $j++) {
        echo "* ";
    }
    echo "<br />";
}

?>