<?php

namespace AppBundle\Controller;

use AppBundle\Contact\ContactMailer;
use AppBundle\Form\ContactType;
use AppBundle\Contact\Contact;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    /**
     * @Route("/", name="fn_front_index")
     * @Route("/accueil")
     */
    public function indexAction(Request $request){
        return $this->render('Front/accueil.html.twig');
    }

    /**
     * @Route("/contact", name="fn_front_contact")
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact;

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
            $mailer = $this->container->get('mailer');

            $contactMail = new ContactMailer($mailer);
            $contactMail->sendFeedBack($contact);
            $contactMail->sendNotification($contact);

             $contact = new Contact;
             $form = $this->createForm(ContactType::class, $contact);
             $request->getSession()->getFlashBag()->add('notice', 'Formulaire envoyé avec succès.');

             return $this->render('Front/contact.html.twig', array('form' => $form->createView(),));
         }
        
        return $this->render('Front/contact.html.twig', array('form' => $form->createView(),));
    }

    /**
     * @Route("/inscription", name="fn_front_inscription")
     */
    public function inscriptionAction (Request $request){
        return $this->render('Front/inscription.html.twig');
    }


    /**
     * @Route("/inscription-observateur", name="fn_front_inscription_obs")
     */
    public function inscriptionObsAction (Request $request)
    {
        /* todo:Compléter la méthode */
        return $this->render('Front/inscription-observateur.html.twig');
    }

    /**
     * @Route("/inscription-naturaliste", name="fn_front_inscription_nat")
     */
    public function inscriptionNatAction (Request $request)
    {
        /* todo:Compléter la méthode */
        return $this->render('Front/inscription-naturaliste.html.twig');
    }

    /**
     * @Route("/connexion", name="fn_front_connexion")
     */
    public function connexionAction (Request $request)
    {
        /* todo:Compléter la méthode */
        return $this->render('Front/connexion.html.twig');
    }

    /**
     * @Route("/kit-observation", name="fn_front_kit")
     */
    public function kitObservationAction (Request $request)
    {
        /* todo:Compléter la méthode */
        return $this->render('Front/kit_observation.html.twig');
    }

    /**
     * @Route("/qui-sommes-nous", name="fn_front_about")
     */
    public function aboutAction (Request $request)
    {
        /* todo:Compléter la méthode */
        return $this->render('Front/qui-sommes-nous.html.twig');
    }

    /**
 * @Route("/carte-des-observations", name="fn_front_map")
 */
    public function mapAction (Request $request)
    {
        /* todo:Compléter la méthode */
        return $this->render('Front/carte-des-observations.html.twig');
    }

    /**
     * @Route("/espace-naturaliste", name="fn_front_espace_nat")
     */
    public function espaceNatAction (Request $request)
    {
        /* todo:Compléter la méthode */
        return $this->render('Front/espace-naturaliste.html.twig');
    }

    /**
     * @Route("/envoi-observation", name="fn_front_envoi_obs")
     */
    public function envoiObsAction (Request $request)
    {
        /* todo:Compléter la méthode */
        return $this->render('Front/envoi-observation.html.twig');
    }

    /**
     * @Route("/nom-compte", name="fn_front_profil")
     */
    public function profilAction (Request $request)
    {
        /* todo:Compléter la méthode */
        return $this->render('Front/mon-compte.html.twig');
    }

}