<?php
// $GET , $_POST = special variables to collect data from HTML forms
// data is sent to the file in teh action attribute of <form> element
// <form action="index.php" method ="get">

// $GET = data is appended to the URL
// NOT SECURE
// Has a character limit
// Bookmark is possible with values
// GET requests can be cached
// Better for a search page

// $_POST = data is packaged inside the body of the HTTP request
// MORE SECURE
// No data limit
// Cannot bookmark
// POST requests are not cached
// Better for submitting credentials

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="04_lecture.php" method="POST">
        <!-- <label for="">Username: </label><br>
        <input type="text" name="username"><br>

        <label for="">Password: </label><br>
        <input type="password" name="password"><br>

        <input type="submit" value="Log In"> -->

        <!-- Start Of Exercise -->
        <label for="">Quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="Total">
        
    </form>
</body>

</html>
<?php
// echo "{$_GET["username"]} <br>";
// echo "{$_GET["password"]} <br>";

// echo "{$_POST["username"]} <br>";
// echo "{$_POST["password"]} <br>";

// Start of Exercise
$item = "Pizza";
$price = 5.99;

$quantity = $_POST['quantity'];
$total = null;

$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}/s <br>";
echo "Your total is: \${$total}";

?>