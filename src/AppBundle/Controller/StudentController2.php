<?php  
Namespace AppBundle\Controller; 

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; 
use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Symfony\Component\HttpFoundation\Response;  
use AppBundle\Entity\Student; 
use AppBundle\Entity\Classes;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Psr\Log\LoggerInterface;

class StudentController2 extends Controller { 
    
public function updateClassAction($id, $classId, $action) { 
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
    if($action == "rm"){
        $stud->removeClass($class);
        $doct->flush();
     } else if ($action == "add"){
        $stud->addClass($class);
        $doct->flush();
     } else {
        return $this->redirect("/student/update/$id");
     }

    return $this->redirect("/student/update/$id");
    }  
} 