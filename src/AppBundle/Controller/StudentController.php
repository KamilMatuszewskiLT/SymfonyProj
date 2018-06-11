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

class StudentController extends Controller { 
   /** 
   * @Route("/student/display") 
*/ 
public function displayAction(Request $request) { 
    $stud = new Student();
    $connection = $this->getDoctrine()->getManager()->getConnection();
    $classesList= $connection->prepare("SELECT * FROM classes");
    $classesList->execute();
    $studentId = array();
    $classId = array();
    while ($row = $classesList->fetch()) {
        $query = $this->getDoctrine()->getManager()->getConnection()->prepare("SELECT name FROM student WHERE id = " . (string)$row['student_id']);
        $query->execute();
        if ($data = $query->fetch()){
            $studentId[] = $data;
        }
        $query = $this->getDoctrine()->getManager()->getConnection()->prepare("SELECT name FROM class WHERE id = " . (string)$row['classes_id']);
        $query->execute();
        if ($data = $query->fetch()){
            $classId[] = $data;
        }
    }



    // Replace duplicate names in the students name column with '--'
    $oldName = "";
    for ($i = 0 ; $i < count($studentId); $i++ ){
        if ($studentId[$i] != $oldName){
            $oldName = $studentId[$i];
        } else {
            $studentId[$i]['name'] = '--';    
        }
    }
    // End
    $form = $this->createFormBuilder($stud) 
         ->add('name', TextType::class)
         ->add('address', TextType::class)
         ->add('classes', EntityType::class, array(
            'class' => Classes::class,
            'choice_label' => 'name',
            'multiple' => true,
            'expanded' => false,
        ))
         ->add('save', SubmitType::class, array('label' => 'Submit'))
         ->getForm();
         $form->handleRequest($request);  
   if ($form->isSubmitted() && $form->isValid()) { 
      $stud = $form->getData(); 
      $doctrine = $this->getDoctrine()->getManager();
      $doctrine -> persist($stud);
      $doctrine -> flush();
      $this->addFlash(
        'notice',
        'New student added.'
    );
   }
    $stud = $this->getDoctrine() 
    ->getRepository('AppBundle:Student') 
    ->findAll();
    return $this->render('student/display.html.twig', array('data' => $stud, 'form' => $form->createView(), 'students' => $studentId, 'classes' => $classId, )); 
 } 
 /** 
   * @Route("/student/delete/{id}", name="student_delete") 
*/ 
public function deleteAction($id) { 
    $doct = $this->getDoctrine()->getManager(); 
    $stud = $doct->getRepository('AppBundle:Student')->find($id); 
    
    if (!$stud) { 
       throw $this->createNotFoundException('No student found for id '.$id); 
    } 
    $doct->remove($stud); 
    $doct->flush(); 
    return $this->redirect("/student/display");
 } 
} 