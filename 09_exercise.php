<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="09_exercise.php" method="post">
        <label for="">Enter a number to count down from: </label>
        <input type="text" name="counter" id="">
        <input type="submit" value="Start!">
    </form>
</body>
</html>
<?php
    $counter = $_POST['counter'];

    // for($i = 1; $i <= $counter; $i++) {
    //     echo "$i <br>";
    // }

    for ($i = $counter; $i > 0; $i--) {
        echo "$i <br>";
    }
?>