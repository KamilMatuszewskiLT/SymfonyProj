<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Student;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

        // First need to check if the student even exists
        if (!$stud) {
            $this->addFlash(
                'notice',
                'No student for id ' . $id . '.'
            );
            return $this->redirect("/student/display");
        }

        $allMarks = $stud->getMarks();

        // Cast marks from objects to an array
        $marks = array();
        for ($i = 0; $i < count($allMarks); $i++) {
            $marks[$i] = array(
                "markId" => $allMarks[$i]->getId(),
                "classId" => $allMarks[$i]->getClassId()->getName(),
                "markValue" => $allMarks[$i]->getMarkValue(),
            );
        }

        // Sort classes in the array by name.
        $className = array();
        foreach ($marks as $key => $row) {
            $className[$key] = $row['classId'];
        }
        array_multisort($className, SORT_DESC, $marks);

        // Replace duplicate names in the class name column with '--'
        $oldName = "";
        for ($i = 0; $i < count($marks); $i++) {
            if ($marks[$i]['classId'] != $oldName) {
                $oldName = $marks[$i]['classId'];
            } else {
                $marks[$i]['classId'] = '--';
            }
        }

        // Get all available classes.
        $connection = $this->getDoctrine()->getManager()->getConnection();
        $allClassesQuery = $connection->prepare("SELECT * FROM class");
        $allClassesQuery->execute();
        $allClasses = array();
        while ($row = $allClassesQuery->fetch()) {
            $allClasses[] = $row;
        }

        //Get only classes into which the student has enrolled.
        $classes = $stud->getClasses();

        for ($i = 0; $i < count($allClasses); $i++) {
            $allClasses[$i]["isAttending"] = false; // First add the "isAttending" field to each class, so this field exists.
            for ($j = 0; $j < count($classes); $j++) {
                if ($classes[$j]->getId() == $allClasses[$i]['id']) {
                    $allClasses[$i]["isAttending"] = true;
                    break;
                } else {
                    $allClasses[$i]["isAttending"] = false;
                }
            }
        }

        // Print to PDF
        switch ($param) {
            case "pdf":
            $counter = 0; // Check if file already exists. If it does, add number after the name.
                do {
                    if ($counter > 0) {
                        $PrintFilename = $stud->getName() . '_ID' . $stud->getId() . "_" . $counter . '.pdf';
                    } else {
                        $PrintFilename = $stud->getName() . '_ID' . $stud->getId() . '.pdf';
                    }
                    $counter++;
                } while (file_exists($this::PDF_PRINT_LOCATION . $PrintFilename));
                $this->get('knp_snappy.pdf')->generateFromHtml(
                    $this->renderView(
                        'student/studentPDF.html.twig', // This file determines how the PDF looks.
                        array(
                            'student' => $stud, 'allClasses' => $allClasses, 'classes' => $classes, 'marks' => $marks,
                        )
                    ),
                    $this::PDF_PRINT_LOCATION . $PrintFilename
                );
                $this->addFlash(
                    'notice',
                    "Created file: " . $this::PDF_PRINT_LOCATION . $PrintFilename
                );
                return $this->redirect("/student/update/$id");
                break;
            case null:
            default:
                return $this->render("student/update.html.twig", array('student' => $stud, 'allClasses' => $allClasses, 'classes' => $classes, 'marks' => $marks));
        }
    }
}
