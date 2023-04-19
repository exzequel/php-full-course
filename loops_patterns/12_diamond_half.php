<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond</title>
</head>
<body>
    <form action="12_diamond_half.php" method="post">
        <label for="">Enter an ODD number between 1 and 19: </label>
        <input type="number" name="n" id="">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php

$n = $_POST['n'];

if (!($n % 2 == 0) && ($n >= 1 && $n <= 19)) {
    $n = ($n / 2);

    // Top Half
    for ($i = 1; $i < $n + 1; $i++) {
        for ($j = $i; $j <= $n; $j++) {
            echo "&nbsp;&nbsp;&nbsp;";
        }
        for ($j = 1; $j < $i; $j++) {
            echo "* ";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br />";
    }

    // Bottom Half
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "&nbsp;&nbsp;&nbsp;";
        }
        for ($j = $i; $j < $n - 1; $j++) {
            echo "* ";
        }
        for ($j = $i; $j <= $n; $j++) {
            echo "* ";
        }
        echo "<br />";
    }
}
else {
    echo "You must enter an ODD number between 1 and 19. Please try again.";
}



?>