<?php
/**
 * Created by PhpStorm.
 * User: Kamil Matuszewski
 * Date: 29.06.2018
 * Time: 12:46
 */

namespace AppBundle\Controller\Extra;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use EasyCorp\Bundle\EasyAdminBundle\Event\EasyAdminEvents;


class StudentController extends  BaseAdminController
{
    public function redirectAction()
    {
        $id = (int)$this->request->query->get('id');
        return $this->redirect("/student/update/$id");
    }
    public function deleteAction()
    {
        $this->dispatch(EasyAdminEvents::PRE_DELETE);
        $id = $this->request->query->get('id');
        $doct = $this->getDoctrine()->getManager();
        $stud = $doct->getRepository('AppBundle:Student')->find($id);

        // Remove all marks tied to this student
        $marks = $stud->getMarks();
        for($i = 0 ; $i < count($marks); $i++){
            $doct->remove($marks[$i]);
        }
        $doct->remove($stud);
        $doct->flush();

        $this->dispatch(EasyAdminEvents::POST_DELETE);
        return $this->redirectToReferrer();
    }
}