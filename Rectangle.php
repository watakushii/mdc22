<?php

class Rectangle implements Shape
{
    private float $length;
    private float $width;

    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    // Реализация метода getArea
    public function getArea(): float
    {
        return $this->length * $this->width;
    }

    // Реализация метода getPerimeter
    public function getPerimeter(): float
    {
        return 2 * ($this->length + $this->width);
    }

    // Реализация метода getDescription
    public function getDescription(): string
    {
        return "Rectangle with length " . $this->length . " and width " . $this->width;
    }
}
