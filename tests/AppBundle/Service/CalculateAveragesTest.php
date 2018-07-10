<?php
/**
 * Created by PhpStorm.
 * User: Kamil Matuszewski
 * Date: 10.07.2018
 * Time: 10:27
 */

namespace AppBundle\Service;


class CalculateAveragesTest extends \PHPUnit_Framework_TestCase
{
    private $averagesCalc;

    protected function setUp()
    {
        $this->averagesCalc = new AveragesCalculator();
    }

    protected function tearDown()
    {
        $this->averagesCalc = NULL;
    }

    public function testCalculateAverageReturnType()
    {
        $avrg = $this->averagesCalc->calculateAverage(array(1,2));
        self::assertEquals("double", gettype($avrg));
    }
}
