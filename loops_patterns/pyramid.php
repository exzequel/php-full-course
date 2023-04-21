<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pyramid.php" method="post">
        <label for="">Enter pyramid height: </label>
        <input type="number" name="pyramid">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
    $pyramid = $_POST['pyramid'];
    for ($i = 1; $i <= $pyramid; $i++) {
        for ($j = 1; $j <= ($pyramid - $i); $j++) {
            echo "&nbsp;&nbsp;";
        }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";

    }

    echo "Hello";
?>