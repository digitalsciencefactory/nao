<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Observation;
use AppBundle\Extraction\Extraction;
use AppBundle\Form\Type\ExtractType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashBoardController extends Controller
{
    /**
     * @Route("/dashboard", name="fn_dashboard_index")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction(){
        return $this->render('dashboard/accueil.html.twig');
    }

    /**
     * @Route("/dashboard/extraction-donnees", name="fn_dashboard_bdd")
     * @Security("has_role('ROLE_NATURALISTE')")
     */
    public function bddAction(Request $request){
        $extraction = new Extraction();
        $form = $this->createForm(ExtractType::class, $extraction);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            // on vérifie que les dates sont dans le bon sens
            if($extraction->datefinApresDatedebut()){

                $manager = $this
                    ->getDoctrine()
                    ->getManager();

                $observationRepository = $manager->getRepository('AppBundle:Observation');

                $observations = $observationRepository->extract($extraction->getDatedebut(), $extraction->getDatefin());

                dump($observations);

                // on transforme en csv

            } else {
                // on informe l'utilisateur du problème
                $form->addError(new FormError("La date de début doit être antérieur à la date de fin"));
            }

        }

        return $this->render('dashboard/extraction.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
