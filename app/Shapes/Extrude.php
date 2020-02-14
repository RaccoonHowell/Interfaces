<?php

namespace App\Shapes;

class Extrude
{
    private $depth;
    private $shape;

    public function __construct(ShapeInterface $shape, float $depth)
    {
        $this->depth = $depth;
        $this->shape = $shape;
    }
    public function volume()
    {
        return $this->shape->area() * $this->depth;
    }
}

// Create an Extrude class in the App\Shapes namespace. On construction it should take a class that implements ShapeInterface as well as a depth. It should have a volume() method which returns the volume (area × depth) of the given shape. Make sure you use type-hinting to make sure you can't pass non-shapes into Extrude.