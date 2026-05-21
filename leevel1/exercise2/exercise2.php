<?php
interface Area {
    public function calculateArea();
}

abstract class Shape implements Area {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}
class Triangle extends Shape {
    public function calculateArea() {
        return ($this->width * $this->height) / 2;
    }
}
class Rectangle extends Shape {
    public function calculateArea() {
        return $this->width * $this->height;
    }
}
$triangle = new Triangle(5, 10);
$rectangle = new Rectangle(5, 10);

echo "Area of Triangle: " . $triangle->calculateArea() . "\n";
echo "<br>";
echo "Area of Rectangle: " . $rectangle->calculateArea() . "\n";

?>