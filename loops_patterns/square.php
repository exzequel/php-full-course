<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="square.php" method="post"></form>
    <label for="">Insert square sides: </label>
    <input type="number" name="square" id="">
    <input type="submit" value="Submit">
</body>
</html>
<?php
    $square = $_POST['square'];

    for ($i = 1; $i <= $square; $i++) {
        for ($j = 1; $j <= $square; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
?>