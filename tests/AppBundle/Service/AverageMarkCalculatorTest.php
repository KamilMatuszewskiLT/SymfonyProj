<?php
/**
 * Created by PhpStorm.
 * User: Kamil Matuszewski
 * Date: 20.06.2018
 * Time: 13:17
 */

namespace Tests\AppBundle\Service;

use AppBundle\Entity\Mark;
use AppBundle\Service\AverageMarkCalculator;

class AverageMarkCalculatorTest extends \PHPUnit_Framework_TestCase
{
    private $averageMarksCalc;

    protected function setUp()
    {
        $this->averageMarksCalc = new AverageMarkCalculator();
    }

    protected function tearDown()
    {
        $this->averageMarksCalc = NULL;
    }

    public function testWithArrayOfIntegers()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->averageMarksCalc->calculateMarkAverages(array(2,3,4));
    }

    public function testMarksAverage()
    {
        $mark1 = new Mark();
        $mark1->setMarkValue(1);
        $mark2 = new Mark();
        $mark2->setMarkValue(3);
        $mark3 = new Mark();
        $mark3->setMarkValue(5);
        $result = $this->averageMarksCalc->calculateMarkAverages(array($mark1,$mark2,$mark3));
        self::assertEquals(3, $result);
    }

    public function testEmptyArray()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->averageMarksCalc->calculateMarkAverages(array());
    }

    public function testReturnType(){
        $mark1 = new Mark();
        $mark1->setMarkValue(1);
        $mark2 = new Mark();
        $mark2->setMarkValue(2);
        $result = $this->averageMarksCalc->calculateMarkAverages(array($mark1,$mark2));
        var_dump($result);
        self::assertEquals("double", gettype($result));
    }
}
