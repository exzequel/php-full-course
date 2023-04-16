<?php
    // switch - replacement to using many elseif statements
    // more efficient with less code to write

    // $grade = "A";

    // switch($grade) {
    //     case "A":
    //         echo "You did great";
    //         break;
    //     case "B":
    //         echo "You did good";
    //         break;
    //     case "C":
    //         echo "You did okay";
    //         break;
    //     case "D":
    //         echo "You did poorly";
    //         break;
    //     case "F":
    //         echo "You failed";
    //         break;
    //     default: // like the else statment
    //         echo "{$grade} is not a valid grade";
    // }

    $date = date("l");
    $date = "Bruhday";
    
    switch ($date) {
        case "Monday":
            echo "I hate Mondays";
            break;
        case "Tuesday":
            echo "It is Taco Tuesdays";
            break;
        case "Wednesday":
            echo "It is Wednesday my dudes";
            break;
        case "Thursday":
            echo "It's almost the weekend";
            break;
        case "Friday":
            echo "Yay Friday";
            break;
        case "Saturday":
            echo "Ah Saturday";
            break;
        case "Sunday":
            echo "Sunday! Oh God it's Monday again";
            break;
        default:
            echo "Hey {$date} is not a date!";
    }

?>