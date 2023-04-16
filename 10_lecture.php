<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="10_lecture.php" method="post">
        <input type="submit" value="Stop!" name="stop">
    </form>
</body>
</html>
<?php
    // while loop - do some code infinitely while some condition remains true
    // if you need to something a fixed amount of time use a for loop
    // if you need to do something at possibly an infinite amount of time use a while loop

    // $counter = 0;
    // while($counter < 10) {
    //     $counter++;
    //     echo "$counter <br>";
    // }

    $seconds = 0;
    $running = true;

    while($running) {
        
        if (isset($_POST['stop'])){
            $running = false;
        }
        else {
            // wait 1 second
            $seconds++;
            echo "$seconds <br>";
        }

    }

?>