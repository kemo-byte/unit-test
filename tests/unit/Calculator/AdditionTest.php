<?php

// class AdditionTest extends \PHPUnit_Framework_TestCase
class AdditionTest extends \PHPUnit\Framework\TestCase
{

    /** @test */

    public function adds_up_given_operands()
    {
        $addition = new \App\Calculator\Addition;

        $addition->setOperands([5,10]);

        $this->assertEquals(15, $addition->calculate());
    }

    
}