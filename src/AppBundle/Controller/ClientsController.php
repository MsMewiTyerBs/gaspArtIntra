<?php
/**
 * Created by PhpStorm.
 * User: MARC
 * Date: 22/06/2018
 * Time: 09:45
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Clients;
use AppBundle\Entity\Devis;
use AppBundle\Entity\Factures;
use AppBundle\Form\Type\DevisType;
use AppBundle\Form\Type\ClientsType;
use AppBundle\Form\Type\FacturesType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientsController extends Controller
{

    //*********** SHOW CLIENT LIST BY ID {id} *********//

    /**
     * @Route("/clients/show/{id}", name="showClient", requirements={"id":"[0-9]+"})
     */
    public function indexAction($id)
    {

            // Call doctrine and the repository to show client by {id}
        $client = $this->getDoctrine()->getRepository('AppBundle:Clients')->find($id);

            // Do the same with $factures from clients
        $factures = $this->getDoctrine()->getRepository('AppBundle:Factures')->findByClient_id($id);


        if (!$client) {
          throw $this->createNotFoundException();
      }

      return $this->render('AppBundle:Clients:listClientsById.html.twig', ['client' => $client,
        'factures' => $factures]);
       // 'devis' => $devis]);
     }


     //************* SHOW CLIENT LIST ACTION BY {LETTER} *******************//

    /**
     * @Route("/clients/list/{letter}", name="listActionByLetter", requirements={"letter":"[a-zA-Z]"})
     */
    public function listByLetterAction($letter)
    {
        $clients = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Clients')
            // Passer la méthode en paramètre
            ->RechercheParLettre($letter);

        return $this->render('AppBundle:Clients:listClients.html.twig', array(
            'clients' => $clients,
            'letter' => $letter
        ));
    }

    //********** Liste clients complète ***************//


    /**
     * @Route("/clients/list", name="listAllClients")
     */
    public function listAction()
    {
        $clients = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Clients')
            // Passer la méthode en paramètre
            ->findAll();

        return $this->render('AppBundle:Clients:listClients.html.twig', array(
            'clients' => $clients
        ));
    }


//     Error message : ype error: Argument 1 passed to Doctrine\ORM\EntityRepository::findBy()
//     must be of the type array, string given, called in J:\wamp64\www\Renovie\src\AppBundle\Controller\ClientsController.php on line 74


    //****** FORMULAIRE CREATION CLIENTS *********//


    /**
     * @Route("/clients/add/", name="createClient")
     */
    public function addClientsAction(Request $request)
    {

        $clients = new Clients();


        $form = $this->createForm(ClientsType::class, $clients);


        $form->handleRequest($request);

        // si le formulaire a été soumis | REMPLACER isValid par isSubmitted()

        if ($form->isSubmitted()) {
            $clients = $form->getData();

            $em = $this->getDoctrine()->getManager();
            // Voir du coté de la vue
            $em->persist($clients);

            // flush() je récupère le client
            $em->flush();

            // $session->getFlashBag()->add('Client correctement ajouté');

            return new Response('Client ajouté !');
        }

        return $this->render('AppBundle:Clients:add.html.twig', ['form' => $form->createView()]);
    }

    //******* FORMULAIRE MODIFICATION CLIENT *******//

    /**
     * @Route("/clients/edit/{id}", name="Modifier clients")
     */
    public function editClientsAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('AppBundle:Clients')->find($id);

        $form = $this->createForm(ClientsType::class, $clients);

        //$form->handleRequest($request);

        //-- Si le formulaire a été soumis | REMPLACER isValid par isSubmitted() --//

        //if ($form->isValid()) {
            //$clients = $form->setData();

            // Faire apparaître les données clients dans le formulaire //


            //$clients->setNom('');

//            Voir du coté de la vue
//            $em->persist($clients);
//
//            flush() je récupère le client
//            $em->flush();

            // $session->getFlashBag()->add('Client correctement ajouté');

            //-- Rajouter à view transformer

        return $this->render('AppBundle:Clients:add.html.twig', ['form' => $form->createView()]);
//            return new Response('Client modifié!');
        }
//        return $this->render('AppBundle:Clients:add.html.twig', ['form' => $form->createView()]);
//    }

    /**
     *
     * @Route("/clients/newFactures/{id}", name="newFactures")
     *
     */
    public function createFacturesAction(Request $request, $id)
    {

        $factures = new Factures();


        $form = $this->createForm(FacturesType::class, $factures);
        $form->handleRequest($request);

        // si le formulaire a été soumis | REMPLACER isValid par isSubmitted()

        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $factures = $form->getData();

                $file = $form['chemin']->getData();

                // Je récupère l'id du client
                $factures->setClientId($id);

                //Je résupère le chemin du fichier :: méth getClientOriginalName()

                $factures->setChemin($file->getClientOriginalName());


                $em = $this->getDoctrine()->getManager();
                // Voir du coté de la vue
                $em->persist($factures);

                // flush() je récupère les factures
                $em->flush();

                // $session->getFlashBag()->add('Client correctement ajouté');
                return new Response('Nouvelle facture crée');
            }
        }

            // Récupérer le fichier

            return $this->render('AppBundle:Factures:newFactures.html.twig', ['form' => $form->createView()]);

        }

//        public function editFacturesAction(){
//
//        }

      //******* FORMULAIRE CREATION DEVIS ********//

    /**
     *
     * @Route("/clients/newDevis/{id}", name="newDevis")
     *
     */
    public function createDevisAction(Request $request, $id)
    {

        $devis = new Devis();

        $form = $this->createForm(DevisType::class, $devis);
        $form->handleRequest($request);


        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $devis = $form->getData();

                $file = $form['chemin']->getData();

                // Je récupère l'id du client
                $devis->setClientId($id);

                //Je résupère le chemin du fichier :: méth getClientOriginalName()

                $devis->setChemin($file->getClientOriginalName());


                $em = $this->getDoctrine()->getManager();
                // Voir du coté de la vue
                $em->persist($devis);

                // flush() je récupère les factures
                $em->flush();

                // $session->getFlashBag()->add('Client correctement ajouté');
                return new Response('Nouveau devis crée');
            }
        }

        // Récupérer le fichier

        return $this->render('AppBundle:Devis:newDevis.html.twig', ['form' => $form->createView()]);

    }


}




