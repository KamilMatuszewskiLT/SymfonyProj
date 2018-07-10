<?php
/**
 * Created by PhpStorm.
 * User: Kamil Matuszewski
 * Date: 09.07.2018
 * Time: 14:48
 */

namespace Tests\AppBundle\Entity;

use AppBundle\Entity\Classes;
use AppBundle\Entity\Mark;
use AppBundle\Entity\Student;

class StudentTest extends \PHPUnit_Framework_TestCase
{

    public function testGetStudentMarksAverageForClassReturnType()
    {
        $student = new Student();
        $mark1 = new Mark();
        $mark2 = new Mark();
        $class = new Classes();
        $class->setName("TestClass");
        $student->addClass($class);
        $mark1->setMarkValue(1)->setClassId($class)->setStudentId($student);
        $mark2->setMarkValue(2)->setClassId($class)->setStudentId($student);
        $class->addMark($mark2)->addMark($mark1);
        $student->addMark($mark1)->addMark($mark2);
        $result = $student->getStudentMarksAverageForClass($class);
        var_dump($result);
        self::assertEquals("double", gettype($result));
    }
}
