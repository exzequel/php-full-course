<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="triangle.php" method="post">
        <label for="">Enter number of sides: </label>
        <input type="number" name="triangle">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
    $triangle = $_POST['triangle'];
    for ($i = 1; $i <= $triangle; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
?>