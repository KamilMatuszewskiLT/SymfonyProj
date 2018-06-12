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

class StudentController extends Controller { 
    /* Doesn't work.
    public $students;
    public $classes;

    function __construct(){
        $doct = $this->getDoctrine()->getManager(); //FatalThrowableErrorHTTP 500 Internal Server Error Call to a member function has() on null
        $this->$students = $doct->getRepository('AppBundle:Student');
        $this->$classes = $doct->getRepository('AppBundle:Classes');
    }
     */
   /** 
   * @Route("/student/display") 
*/ 
public function displayAction(Request $request) { 
    $stud = new Student();
    $connection = $this->getDoctrine()->getManager()->getConnection();
    $classesList = $connection->prepare("SELECT * FROM classes");
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
   * @Route("/student/delete/{id}", name="student_delete", requirements={"id"="\d+"}) 
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
  /** 
   * @Route("/student/update/{id}", name="student_update", requirements={"id"="\d+"}) 
*/ 
public function updateAction($id, LoggerInterface $logger) { 
    $doct = $this->getDoctrine()->getManager(); 
    $stud = $doct->getRepository('AppBundle:Student')->find($id);
    if (!$stud) {  
        $this->addFlash(
            'notice',
            'No student for id ' . $id . '.'
        );
        return $this->redirect("/student/display");
     } 
    $connection = $this->getDoctrine()->getManager()->getConnection();
    $allClassesQuery = $connection->prepare("SELECT * FROM class");
    $allClassesQuery->execute();
    $allClasses = array();
    while ($row = $allClassesQuery->fetch()){
        $allClasses[] = $row;
    }
    $classes = $stud->getClasses();
    
    for($i = 0 ; $i < count($allClasses); $i++){
        $allClasses[$i]["isAttending"] = FALSE; // First add the "isAttending" field to each class, so it exists.
        for($j = 0 ; $j < count($classes); $j++){
            //$logger->info($classes[$j]->getId() . ' ' . $allClasses[$i]['id']);
            if($classes[$j]->getId() == $allClasses[$i]['id']){
                $allClasses[$i]["isAttending"] = TRUE; 
                break;    
            } else {
                $allClasses[$i]["isAttending"] = FALSE;
            }
        }
    }    

    return $this->render("student/update.html.twig", array('student' => $stud, 'allClasses' => $allClasses, 'classes' => $classes ));
}
 /** 
   * @Route("/student/update/{id}/{classId}/{action}", requirements={"id"="\d+", "classId"="\d+"}) 
*/  
} 