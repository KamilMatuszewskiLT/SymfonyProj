<?php
/**
 * Created by PhpStorm.
 * User: Kamil Matuszewski
 * Date: 20.06.2018
 * Time: 09:00
 */

namespace Tests\AppBundle\Service;

use AppBundle\Service\AverageMarkCalculator;

class AverageMarkCalculatorTest extends \PHPUnit_Framework_TestCase
{
    private $averageCalc;

    protected function setUp()
    {
        $this->averageCalc = new AverageMarkCalculator();
    }

    protected function tearDown()
    {
        $this->averageCalc = NULL;
    }

    public function testAverage()
    {
        $result = $this->averageCalc->calculateAverage(array(2,3,4));
        $this->assertEquals(3, $result);
    }

    public function testEmptyArray()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->averageCalc->calculateAverage(array());
    }

    public function testArrayOfNonNumbersAsArgument()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->averageCalc->calculateAverage(array("k","dfg","45"));
    }
}
