<?php
echo "Write a PHP script to demonstrate decision making in PHP using if–else and switch–case statements.<br>";
echo "Name : Abhay Parmar <br>";
echo "Enrollment Number : 24082291018 <br>";
echo "------------------------------------------<br><br>";

$marks = 45;

if ($marks >= 75) {
    echo "Grade: Distinction";
} elseif ($marks >= 60) {
    echo "Grade: First Class";
} elseif ($marks >= 50) {
    echo "Grade: Second Class";
} else {
    echo "Grade: Fail";
}

echo "<br><br>";

$day = 3;

switch ($day) {
    case 1:
        echo "Day is Monday";
        break;

    case 2:
        echo "Day is Tuesday";
        break;

    case 3:
        echo "Day is Wednesday";
        break;

    default:
        echo "Invalid Day Number";
}
?>
