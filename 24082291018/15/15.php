<?php
echo "Write a PHP script to demonstrate polymorphism using method overriding in PHP.<br>";
echo "Name : Abhay Parmar <br>";
echo "Enrollment Number : 24082291018 <br>";
echo "------------------------------------------<br><br>";

class Animal {
    public function sound() {
        echo "Animal makes sound<br>";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Dog barks<br>";
    }
}

class Cat extends Animal {
    public function sound() {
        echo "Cat meows<br>";
    }
}

$animals = array(new Dog(), new Cat());

foreach($animals as $animal) {
    $animal->sound();
}
?>