<?php

class Rover 
{

    private $x;
    private $y;
    private $orientation;

    public function __construct($x,$y,$orientation)
    {
        $this->x = $x;
        $this->y = $y;
        $this->orientation = $orientation;
    }
    
    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function getOrientation()
    {
        return $this->orientation;
    }

    public function turnRight()
    {
        if ($this->getOrientation() === "E"){
            $this->orientation = "S";
        } else if ($this->getOrientation() === "S"){
            $this->orientation = "W";
        } else if ($this->getOrientation() === "W"){
            $this->orientation = "N";
        } else {
            $this->orientation = "E";
        }
    }
}