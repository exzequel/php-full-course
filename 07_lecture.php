<?php
// logical operators - combine conditional statements
// if(condition1 && condtion2)

// && - True if both conditions are true
// || - True if at least one condition is true
// ! = True if false, False if true (Inverse)

$temp = 15;
$cloudy = true;

// if ($temp >= 0 && $temp <= 30) {
//     echo "The weather is good.";
// }
// else {
//     echo "The weather is bad.";
// }

if ($temp < 0 || $temp > 30) {
    echo "The weather is bad. <br>";
} else {
    echo "The weather is good. <br>";
}

if (!$cloudy) {
    echo "It's sunny";
}
else {
    echo "It's cloudy";
}

?>