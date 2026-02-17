<?php
echo "Write a PHP script to create associative arrays and apply sorting functions such as asort()and ksort().<br>";
echo "Name : Abhay Parmar <br>";
echo "Enrollment Number : 24082291018 <br>";
echo "------------------------------------------<br><br>";

$students = array(
    "Indrajit" => 85,
    "Abhay" => 90,
    "Aryan" => 75
);

asort($students);
echo "Sorted by Value:<br>";
foreach($students as $name => $marks) {
    echo "$name => $marks <br>";
}

ksort($students);
echo "<br>Sorted by Key:<br>";
foreach($students as $name => $marks) {
    echo "$name => $marks <br>";
}
?>