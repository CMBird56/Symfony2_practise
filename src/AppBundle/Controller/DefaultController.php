<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Person;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

      /*  $person = new Person();
        $person->setName('bob')
                ->setFavFootballTeam('Man Utd')
                ->setAge(56)
            ;

       $em = $this->getDoctrine()->getManager();
       $em->persist($person); */
        $id=2;

        $person = $this->getDoctrine()
            ->getRepository('AppBundle:Person')
            ->find($id);
        if(!$person){
            throw $this->createNotFoundException(
                'No person found for id ' . $id
            );
        }

       exit(\Doctrine\Common\Util\Debug::dump($person));

        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
