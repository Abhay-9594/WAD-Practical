<?php
echo "Write a PHP script to demonstrate basic string functions such as strlen(), substr(), trim(), and strpos().<br>";
echo "Name : Abhay Parmar <br>";
echo "Enrollment Number : 24082291018 <br>";
echo "------------------------------------------<br><br>";

$str = " Abhay Parmar  ";

echo "Length: " . strlen($str) . "<br>";
echo "Trimmed: " . trim($str) . "<br>";
echo "Substring: " . substr($str, 2, 5) . "<br>";
echo "Position of 'World': " . strpos($str, "Parmar");
?>