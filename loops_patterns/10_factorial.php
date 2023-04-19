<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="10_factorial.php" method="post">
        <label for="">Enter a number: </label>
        <input type="number" name="n" id="">
    </form>
    
</body>
</html>
<?php

$n = $_POST['n'];
$factorial = 1;

for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}

echo "The factorial of $n is $factorial";

?>