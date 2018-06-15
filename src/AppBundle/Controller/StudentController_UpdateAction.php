<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Classes;
use AppBundle\Entity\Student;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class StudentController_UpdateAction extends Controller
{

    private const PDF_PRINT_LOCATION = 'C:\wamp64\bin\php\php7.2.4\DBExample\app\Resources\PDFs\\';

    /**
     * @Route("/student/update/{id}", name="student_update", requirements={"id"="\d+"})
     * @Route("/student/update/{id}/{param}", name="student_update_pdf", requirements={"id"="\d+"})
     */
    public function updateAction($id, LoggerInterface $logger, $param = null)
    {
        $doct = $this->getDoctrine()->getManager();
        $stud = $doct->getRepository('AppBundle:Student')->find($id);
        $allMarks = $stud->getMarks();
        $marks = array( "markId", "classId", "markValue");
        for ($i = 0; $i < count($allMarks); $i++) {
            $marks[$i] = array(
                "markId" => $allMarks[$i]->getId(),
                "classId" => $allMarks[$i]->getClassId()->getName(),
                "markValue" => $allMarks[$i]->getMarkValue(),
            );
        }
        // Replace duplicate names in the class name column with '--'
        $oldName = "";
        for ($i = 0; $i < count($marks); $i++) {
            if ($marks[$i]['classId'] != $oldName) {
                $oldName = $marks[$i]['classId'];
            } else {
                $marks[$i]['classId'] = '--';
            }
        }
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
        while ($row = $allClassesQuery->fetch()) {
            $allClasses[] = $row;
        }
        $classes = $stud->getClasses();

        for ($i = 0; $i < count($allClasses); $i++) {
            $allClasses[$i]["isAttending"] = false; // First add the "isAttending" field to each class, so the field exists.
            for ($j = 0; $j < count($classes); $j++) {
                //$logger->info($classes[$j]->getId() . ' ' . $allClasses[$i]['id']);
                if ($classes[$j]->getId() == $allClasses[$i]['id']) {
                    $allClasses[$i]["isAttending"] = true;
                    break;
                } else {
                    $allClasses[$i]["isAttending"] = false;
                }
            }
        }
        switch ($param) {
            case "pdf":
                $this->get('knp_snappy.pdf')->generateFromHtml(
                    $this->renderView(
                        'student/studentPDF.html.twig',
                        array(
                            'student' => $stud, 'allClasses' => $allClasses, 'classes' => $classes, 'marks' => $marks,
                        )
                    ),
                    $this::PDF_PRINT_LOCATION . $stud->getName() . '_ID' . $stud->getId() . '.pdf'
                );
                $this->addFlash(
                    'notice',
                    "Created file: " . $this::PDF_PRINT_LOCATION . $stud->getName() . '_ID' . $stud->getId() . '.pdf'
                );
                return $this->redirect("/student/update/$id");
                break;
            case null:
            default:
                return $this->render("student/update.html.twig", array('student' => $stud, 'allClasses' => $allClasses, 'classes' => $classes, 'marks' => $marks));
        }
    }
}
