<?php

use PHPUnit\Framework\TestCase;

class TestRover extends TestCase
{

    public function testHello()
    {
        $this->assertEquals("Hello", "Hello");
    }

    public function testIsCreatedRover()
    {
        $rover = new Rover(8,3,"N");
        $this->assertEquals(8, $rover->getX());
        $this->assertEquals(3, $rover->getY());
        $this->assertEquals("N", $rover->getOrientation());
    }

    public function testIsChangedOrientation()
    {
        $rover = new Rover(8,3,"E");
        
        if ($rover->getOrientation() === "N"){
            $this->assertEquals("N", $rover->getOrientation());
        } else if ($rover->getOrientation() === "S"){
            $this->assertEquals("S", $rover->getOrientation());
        } else if ($rover->getOrientation() === "W"){
            $this->assertEquals("W", $rover->getOrientation());
        } else {
            $this->assertEquals("E", $rover->getOrientation());
        }
    }

    

}

