<?php

namespace App\Shapes;

class Rectangle implements ShapeInterface
{
    private $width;

    private $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() : float
    {
        return $this->width * $this->height;
    }
}

// Create a ShapeInterface with an area() method in the App\Shapes namespace. Then create three further classes which implement the interface: Square, Circle, and Rectangle. Square should be given a side length on construction, Circle should be given a radius, and Rectangle should be give a width and height.