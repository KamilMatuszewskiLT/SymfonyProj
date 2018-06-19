<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Classes;
use AppBundle\Entity\Mark;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class MarksController extends Controller
{
/**
     * @Route("/student/addMark/{studId}/{classId}/{mark}", requirements={
     *       "studId"="\d+",
     *       "classId"="\d+",
     *       "mark"="\d+",
     * },)
     */
    public function addMark($studId, $classId, $mark)
    {
        $doct = $this->getDoctrine()->getManager();
        $stud = $doct->getRepository('AppBundle:Student')->find($studId);
        $class = $doct->getRepository('AppBundle:Classes')->find($classId);
        if (!$stud){
            $this->addFlash(
                'notice',
                'No student with id #'.$studId.'.'
            );
            return $this->redirect("/student/display/$studId");
        }
        if (!$stud->checkIfAttendsClass($class) || $mark > 6 || $mark < 1) {
            $this->addFlash(
                'notice',
                'Improper data in student/addMark/.'
            );
            return $this->redirect("/student/update/$studId");
        }

        $newMark = new Mark;
        $newMark->setMarkValue($mark);
        $newMark->setStudentId($stud);
        $newMark->setClassId($class);

        $doct->persist($newMark);
        $doct->flush();
        $this->addFlash(
            'notice',
            'Added mark with value of ' . $mark . ' to student ID ' . $studId .  '-' .$stud->getName().  ' for class ID ' . $classId . '-' . $class->getName() . '.'
        );
        return $this->redirect("/student/update/$studId");
    }

    /**
      * @Route("/student/delMark/{studId}/{markId}",name="mark_delete" , requirements={
     *       "markId"="\d+",
     *       "studId"="\d+",
     * },)
     */
    public function deleteAction($markId, $studId)
    {
        $doct = $this->getDoctrine()->getManager();
        $stud = $doct->getRepository('AppBundle:Student')->find($studId);
        $mark = $doct->getRepository('AppBundle:Mark')->find($markId);

        if (!$stud) {
            $this->addFlash(
                'notice',
                'No student for ID ' . $studId
            );
            return $this->redirect("/student/display/");
        } else if (!$mark) {
            $this->addFlash(
                'notice',
                'No mark for ID ' . $markId
            );
            return $this->redirect("/student/update/$studId");
        }
        $doct->remove($mark);
        $doct->flush();
        $this->addFlash(
            'notice',
            'Mark deleted.'
        );
        return $this->redirect("/student/update/$studId");
    }
}
