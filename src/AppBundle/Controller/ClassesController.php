<?php  
namespace AppBundle\Controller; 

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; 
use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Symfony\Component\HttpFoundation\Response;  
use AppBundle\Entity\Classes; 

use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ClassesController extends Controller { 
/** 
   * @Route("/class/display") 
*/ 
public function displayAction(Request $request) { 
    $class = new Classes();
    $form = $this->createFormBuilder($class) 
         ->add('name', TextType::class)
         ->add('save', SubmitType::class, array('label' => 'Submit'))
         ->getForm();
         $form->handleRequest($request);  
   if ($form->isSubmitted() && $form->isValid()) { 
      $class = $form->getData(); 
      $doctrine = $this->getDoctrine()->getManager();  
      
      // tells Doctrine you want to save the Product 
      $doctrine -> persist($class);  
        
      //executes the queries (i.e. the INSERT query) 
      $doctrine -> flush();
      $this->addFlash(
        'notice',
        'New class added.'
    );
   }
    $class = $this->getDoctrine() 
    ->getRepository('AppBundle:Classes') 
    ->findAll();
    return $this->render('classes/display2.html.twig', array('data' => $class, 'form' => $form->createView(),)); 
 } 
 /** 
   * @Route("/class/delete/{id}", name="class_delete") 
*/ 
public function deleteAction($id) { 
    $doct = $this->getDoctrine()->getManager(); 
    $class = $doct->getRepository('AppBundle:Classes')->find($id); 
    
    if (!$class) { 
       throw $this->createNotFoundException('No class found for id '.$id); 
    } 
    $doct->remove($class); 
    $doct->flush(); 
    return $this->redirect("/class/display");
 } 
} 