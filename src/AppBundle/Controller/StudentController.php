<?php  
namespace AppBundle\Controller; 

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; 
use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Symfony\Component\HttpFoundation\Response;  
use AppBundle\Entity\Student; 

use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StudentController extends Controller { 
   /** 
      * @Route("/student/add") 
   */ 
   public function addAction() { 
      $stud = new Student(); 
      $stud->setName('Adam'); 
      $stud->setAddress('12 north street'); 
      $doct = $this->getDoctrine()->getManager();
      
      // tells Doctrine you want to save the Product 
      $doct->persist($stud);
      
      //executes the queries (i.e. the INSERT query) 
      $doct->flush(); 
      
      return new Response('Saved new student with id ' . $stud->getId()); 
   } 
   /** 
   * @Route("/student/display") 
*/ 
public function displayAction(Request $request) { 
    $stud = new Student();
    $form = $this->createFormBuilder($stud) 
         ->add('name', TextType::class)
         ->add('address', TextType::class)
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
    return $this->render('student/display.html.twig', array('data' => $stud, 'form' => $form->createView(),)); 
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