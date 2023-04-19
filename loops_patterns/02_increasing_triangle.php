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
// Increasing Triangle Pattern

$n = $_POST['n'];

// Start from square pattern

// rows (inner loop)
for ($i = 1; $i <= $n; $i++) {
    // columns (outer loop)
    // change second condition to <= $i
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

?>
