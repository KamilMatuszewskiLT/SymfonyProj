<?php
/**
 * Created by PhpStorm.
 * User: Kamil Matuszewski
 * Date: 29.06.2018
 * Time: 12:46
 */

namespace AppBundle\Controller\Extra;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;


class ClassesController extends  BaseAdminController
{
    public function redirectAction()
    {
        $id = (int)$this->request->query->get('id');
        return $this->redirect("/student/update/$id");
    }
}