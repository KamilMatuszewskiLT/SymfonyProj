<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Classes;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class MarksController extends Controller
{
/**
 * @Route("/class/display")
 */
    public function displayAction(Request $request)
    {
        $class = new Mark();
        $form = $this->createFormBuilder($class)
            ->add('name', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Submit'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $class = $form->getData();
            $doctrine = $this->getDoctrine()->getManager();

            // tells Doctrine you want to save the Product
            $doctrine->persist($class);

            //executes the queries (i.e. the INSERT query)
            $doctrine->flush();
            $this->addFlash(
                'notice',
                'New class added.'
            );
            return $this->redirect($request->getUri());
        }
        $class = $this->getDoctrine()
            ->getRepository('AppBundle:Classes')
            ->findAll();
        return $this->render('classes/display2.html.twig', array('data' => $class, 'form' => $form->createView()));


        // CUSTOM SQL => " SELECT * FROM students_marks INNER JOIN classes_marks ON students_marks.mark_id=classes_marks.mark_id "

    }
    /**
     * @Route("/class/delete/{id}", name="class_delete")
     */
    public function deleteAction($id)
    {
        $doct = $this->getDoctrine()->getManager();
        $class = $doct->getRepository('AppBundle:Classes')->find($id);

        if (!$class) {
            throw $this->createNotFoundException('No class found for id ' . $id);
        }
        $doct->remove($class);
        $doct->flush();
        $this->addFlash(
            'notice',
            'Class deleted.'
        );
        return $this->redirect("/class/display");
    }
}
