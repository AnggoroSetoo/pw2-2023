<?php
    class Fruit {
        // Property
        public $name; 
        public $color;

        // Method
        function getName() {
            return $this->name;
        }

        function getColor() {
            return $this->color;
        }
    }

    // Object Apple
    $apple = new Fruit();
    $apple->name = "Apple";
    echo "<br>";
    $apple->color = "Red";

    echo $apple->getName();
    echo $apple->getColor();

    echo "<br><br>";

    //Object banana
    $banana = new Fruit();
    $banana->name = "Banana";
    echo "<br>";
    $banana->color = "Yellow";
    
    echo $banana->getName();
    echo $banana->getColor();
?>