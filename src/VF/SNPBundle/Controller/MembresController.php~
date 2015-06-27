<?php

namespace VF\SNPBundle\Controller;

use VF\SNPBundle\Entity\Garde;
use VF\SNPBundle\Entity\Membre;
use VF\SNPBundle\Form\MembreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class MembresController extends Controller
{
   
	
	/**
     * @Security("has_role('ROLE_MEMBRE')")
    */
	public function membresAction()
    {
        return $this->render('VFSNPBundle:Membres:membres.html.twig');
    }

	
	/**
     * @Security("has_role('ROLE_ORDINAIRE')")
    */
	public function gardesAction()
    {
	    $repository = $this->getDoctrine()->getManager()->getRepository('VFSNPBundle:Garde');
	    $listeGardes=$repository->findAll();
		return $this->render('VFSNPBundle:Membres:gardes.html.twig', array(
		'listeGardes' => $listeGardes));
    }
	
	/**
     * @Security("has_role('ROLE_ORDINAIRE')")
    */
	public function gardesPersoAction()
    {
	    $repoM = $this->getDoctrine()->getManager()->getRepository('VFSNPBundle:Membre');
	    $user = $this->getUser();
		$membre = $repoM->find($user->getMembre());
        if (null === $membre) {
		    throw $this->createNotFoundException('Membre[id='.$user.idmembre.']inexistant.');
        } else {
		$repoG = $this->getDoctrine()->getManager()->getRepository('VFSNPBundle:Garde');
	    $listeGardes=$repoG->findAll();
		return $this->render('VFSNPBundle:Membres:gardesPerso.html.twig', array(
		'listeGardes' => $listeGardes,
		'membre' => $membre
		));
		}
	}

	/**
     * @Security("has_role('ROLE_MEMBRE')")
    */
	public function listeMembresAction()
	{
		$repoM = $this->getDoctrine()->getManager()->getRepository('VFSNPBundle:Membre');
	    $listeMenbres=$repoM->findAll();
		return $this->render('VFSNPBundle:Membres:listeMembres.html.twig', array(
		'listeMembres' => $listeMenbres));
	}
	
	public function monprofilAction(Request $request)
	{
	    $user = $this->getUser();	// récupère l'utilisateur via security.context et pas la session !
	    $membre = $this->getDoctrine() ->getManager()->getRepository('VFSNPBundle:Membre')->find($user->getMembre());
        $form = $this->get('form.factory')->create(new MembreType(), $membre);
		if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($m);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Données de membre SNP  bien enregistrées.');

            return $this->redirect($this->generateUrl('vf_snp_monprofil'));
        }
        return $this->render('VFSNPBundle:Membres:formMembre.html.twig', array('form' => $form->createView(),));

	}

}
