<?php
    // variable - reusble container that holds data
    // string, integer floats, boolean

    // strings
    $name = "Bro Code"; 
    $food = "Pizza";
    $email = "fake3ma1l@gmail.com";
    // strings can contain numbers but you can't do operations on them

    // whole integers
    $age = 21;
    $users = 2;
    $quantity = 4;

    // floats - contains decimal values
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    // boolean - either true or false
    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null;


    echo "Hello {$name} <br>";
    echo "You like {$food} <br>";
    echo "Your email is {$email} <br>";

    echo "You are now {$age} years old <br>";
    echo "There are {$users} online <br>";
    echo "You would like to buy {$quantity} items <br>";

    echo "Your gpa is: {$gpa} <br>";
    echo "Your pizza is \${$price} <br>"; // to display the ($) since php gets confused precede it with an escape sequence (\)
    echo "The sales tax rate is: \${$tax_rate} <br>";

    echo "Online status: {$online} <br>"; 
    // when you output false boolean values it will not display anything
    // if it is true it will display 1
    // we don't normally display boolean values in an ouput but use them internallys

    echo "You have ordered {$quantity} x {$food}s <br>";
    $total = $quantity * $price;
    echo "Your total is: \${$total} <br>";



?>