<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="01_square.php" method="post">
        <label for="">Enter n: </label>
        <input type="number" name="n">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php
// 1. SIZE - how many rows you want in th pattern
// 2. Putting together nested loops


$n = $_POST['n'];

// rows (outer loop)
for ($i = 1; $i <= $n; $i++) {
    // columns (inner loop)
    for ($j = 1; $j <= $n; $j++) {
        echo "* ";
    }
    echo "<br>"; // must be the last statement of outer loop
}


?>