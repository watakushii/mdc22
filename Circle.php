<?php

class Circle implements Shape
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    // Реализация метода getArea
    public function getArea(): float
    {
        return pi() * $this->radius ** 2;
    }

    // Реализация метода getPerimeter
    public function getPerimeter(): float
    {
        return 2 * pi() * $this->radius;
    }

    // Реализация метода getDescription
    public function getDescription(): string
    {
        return "Circle with radius " . $this->radius;
    }
}
