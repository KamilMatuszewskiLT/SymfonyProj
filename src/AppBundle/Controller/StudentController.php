<?php  
namespace AppBundle\Controller; 

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
        $classId[] = $row['classes_id'];
    }
    $form = $this->createFormBuilder($stud) 
         ->add('name', TextType::class)
         ->add('address', TextType::class)
         ->add('classes', EntityType::class, array(
            // looks for choices from this entity
            'class' => Classes::class,
        
            // uses the Classes.name property as the visible option string
            'choice_label' => 'name',
        
            // used to render a select box, check boxes or radios
            'multiple' => true,
            'expanded' => true,
        ))
         ->add('save', SubmitType::class, array('label' => 'Submit'))
         ->getForm();
         $form->handleRequest($request);  
   if ($form->isSubmitted() && $form->isValid()) { 
      $stud = $form->getData(); 
      $doctrine = $this->getDoctrine()->getManager();  
      
      // tells Doctrine you want to save the Product 
      $doctrine -> persist($stud);  
        
      //executes the queries (i.e. the INSERT query) 
      $doctrine -> flush();
      $this->addFlash(
        'notice',
        'New student added.'
    );
   }
    $stud = $this->getDoctrine() 
    ->getRepository('AppBundle:Student') 
    ->findAll();
    return $this->render('student/display.html.twig', array('data' => $stud, 'form' => $form->createView(), 'classeslistStudentIDs' => $studentId, 'classeslistClassesIDs' => $classId)); 
 } 
 /** 
   * @Route("/student/update/{id}") 
*/ 
public function updateAction($id) { 
    $doct = $this->getDoctrine()->getManager(); 
    $stud = $doct->getRepository('AppBundle:Student')->find($id);  
    
    if (!$stud) { 
       throw $this->createNotFoundException( 
          'No student found for id '.$id 
       ); 
    } 
    $stud->setAddress('7 south street'); 
    $doct->flush(); 
    
    return new Response('Changes updated!'); 
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