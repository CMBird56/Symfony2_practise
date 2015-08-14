<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function newAction(Request $request)
    {

        $task = new Task();

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit', array('label' => 'Create Task'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            // perform some action, such as saving the task to the database
            $var = $form->get('task')->getData();
            $var2 = $form->get('dueDate')->getData();
            echo "<p>" . $var . "</p>" . "<br/>";

        }

        /*if($form->isValid()) {
            return $this->redirectToRoute('task_success');
        }*/

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));

    }


}
