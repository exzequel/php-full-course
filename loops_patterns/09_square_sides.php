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
// SQUARE BORDER

$n = $_POST['n'];

// print top side
for ($i = 1; $i <= $n; $i++) {
    echo "* ";
}
echo "<br>";

// print middle
for ($i = 1; $i <= $n - 2; $i++) {
    echo "* ";
    for ($j = 1; $j <= $n - 2; $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    echo "* ";
    echo "<br>";
}

for ($i =1; $i <= $n; $i++) {
    echo "* ";
}

// for ($i = 1; $i <= $n; $i++) {
//     for ($j = 1; $j <= $n; $j++) {
//         echo "* ";
//     }
//     echo "<br>";
// }


?>