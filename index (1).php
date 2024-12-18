<?php

require_once 'Shape.php';
require_once 'Circle.php';
require_once 'Rectangle.php';

// Создание объекта Circle
$circle = new Circle(5);
echo $circle->getDescription() . "\n";
echo "Area: " . $circle->getArea() . "\n";
echo "Perimeter: " . $circle->getPerimeter() . "\n";

// Создание объекта Rectangle
$rectangle = new Rectangle(4, 6);
echo $rectangle->getDescription() . "\n";
echo "Area: " . $rectangle->getArea() . "\n";
echo "Perimeter: " . $rectangle->getPerimeter() . "\n";
