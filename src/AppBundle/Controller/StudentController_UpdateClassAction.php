<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Student;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StudentController_UpdateClassAction extends Controller
{

    /**
     * @Route("/student/update/{id}/{classId}/{action}", requirements={"id"="\d+", "classId"="\d+"})
     */
    public function updateClassAction($id, $classId, $action)
    {
        $doct = $this->getDoctrine()->getManager();
        $stud = $doct->getRepository('AppBundle:Student')->find($id);
        if (!$stud) {
            $this->addFlash(
                'notice',
                'No student for id ' . $id . '.'
            );
            return $this->redirect("/student/display");
        }
        $class = $doct->getRepository('AppBundle:Classes')->find($classId);
        if (!$class) {
            $this->addFlash(
                'notice',
                'No class for id ' . $classId . '.'
            );
            return $this->redirect("/student/display");
        }
        if ($action == "rm") {
            $stud->removeClass($class);
            $doct->flush();
        } else if ($action == "add") {
            $stud->addClass($class);
            $doct->flush();
        } else {
            return $this->redirect("/student/update/$id");
        }

        return $this->redirect("/student/update/$id");
    }
}
