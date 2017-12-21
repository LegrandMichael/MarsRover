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

    public function testIsTurned()
    {
        $rover = new Rover(8,3,"N");
        
        if ($rover->getOrientation() === $this->orientation){
            $this->assertEquals($this->orientation, $rover->getOrientation());
        }



         
    }

}

