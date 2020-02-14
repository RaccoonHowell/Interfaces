<?php

namespace App\Shapes;

class Square implements ShapeInterface
{
    private $sideLength;

    public function __construct(float $sideLength)
    {
        $this->sideLength = $sideLength;
    }

    public function area() : float
    {
        return $this->sideLength * $this->sideLength;
    }
}

// Create a ShapeInterface with an area() method in the App\Shapes namespace. Then create three further classes which implement the interface: Square, Circle, and Rectangle. Square should be given a side length on construction, Circle should be given a radius, and Rectangle should be give a width and height.