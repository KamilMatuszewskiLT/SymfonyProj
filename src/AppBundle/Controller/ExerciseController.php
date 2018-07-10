<?php
/**
 * Created by PhpStorm.
 * User: Kamil Matuszewski
 * Date: 09.07.2018
 * Time: 10:39
 */
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ExerciseController extends  Controller {
    /**
     * @Route("/ex")
     */
    public function displayAction(Request $request)
    {
        $x = array(1, 2, 3, 4, 5);
        var_dump($x);
        unset($x[3]);
        $x = array_values($x);
        echo '
';
        var_dump($x);

        return $this->render('ex.html.twig', array( ));
    }

}