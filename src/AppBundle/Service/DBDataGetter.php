<?php
/**
 * Created by PhpStorm.
 * User: Kamil Matuszewski
 * Date: 21.06.2018
 * Time: 09:50
 */

namespace AppBundle\Service;


class DBDataGetter
{
    public function getAllStudents(){
        $students = $this->getDoctrine()->getManager()->getRepository('AppBundle:Student');
        return $students;
    }

    public function getAllClasses(){
        $classes = $this->getDoctrine()->getManager()->getRepository('AppBundle:Classes');
        return $classes;
    }

    public function getAllMarks(){
        $marks = $this->getDoctrine()->getManager()->getRepository('AppBundle:Marks');
        return $marks;
    }
}