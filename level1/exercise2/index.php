<?php

require_once 'Triangle.php';
require_once 'Rectangle.php';

$triangle = new Triangle(3, 8);
$rectangle = new Rectangle(5, 10);

echo "Triangle Area: " . $triangle->calculateArea() . "\n";
echo "<br>";
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";

?>