<?php

// class DivisionTest extends \PHPUnit_Framework_TestCase
class DivisionTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function divides_given_operands() {
        $division = new \App\Calculator\Division;
        $division->setOperands([100,2]);

        $this->assertEquals(50, $division->calculate());
    }
}
