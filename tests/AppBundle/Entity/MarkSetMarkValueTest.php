<?php
/**
 * Created by PhpStorm.
 * User: Kamil Matuszewski
 * Date: 26.06.2018
 * Time: 10:32
 */

namespace Tests;

use AppBundle\Entity\Mark;

class MarkSetMarkValueTest extends \PHPUnit_Framework_TestCase
{

    public function testSetMarkValue()
    {
        $mark1 = new Mark();
        $markValue = 5;
        $mark1->setMarkValue($markValue);
        self::assertEquals($markValue, $mark1->getMarkValue());
    }

}
