<?php

namespace VF\SNPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class AssociationController extends Controller
{
    /**
     * @Security("has_role('ROLE_MEMBRE')")
    */
	public function comiteAction()
    {
	    $comite=array(
		'Président' => 'Gilles Meylan', 
		'Vice-président' => 'Bernard Laubscher', 
		'Secrétaire' => 'Véronique Widmeier-Pasche', 
		'Trésorière' => 'Sylvie Cottier Lehmann',
		'Formation continue' => 'Catherine Bourban-Jourinek');
		
        return $this->render('VFSNPBundle:Association:comite.html.twig', array(
		'nom' => 'Comité',
		'liste' => $comite));
    }
	
	/**
     * @Security("has_role('ROLE_MEMBRE')")
    */
	public function deleguesAction()
    {
	    $delegues=array(
		'Pool des délégués SSP' => 'Ann-Christin Selbach Clémence',
		'Commission des intérêts professionnels (CIP) SNM' => 'Cyril Jeanneret',
		'Comité RSNe' => 'Vacant',
		'Commision formation continue SNM' => 'Vincent Froidevaux',
		'MFE Neuchâtel' => 'Vincent Froidevaux et Catherine Bourban-Jourinek',
		'Campagne rougeole' => 'Marie-José Matthey-De Perrot',
		'Cours SNP' => 'Catherine Bourban-Jourinek, Michel Giordano',
		'Médecine scolaire' => 'Sylvie Cottier-Lehmann et Isabelle Brun',
		);
		
        return $this->render('VFSNPBundle:Association:delegues.html.twig', array(
		'nom' => 'Délégués',
		'liste' => $delegues));
    }
	
	/**
     * @Security("has_role('ROLE_MEMBRE')")
    */
	public function verificateursAction()
    {
		$verificateurs=array('Andrea Mazzucco','Daniela Stefanutti');
        return $this->render('VFSNPBundle:Association:verificateurs.html.twig', array(
		'nom' => 'Vérificateurs',
	    'liste' => $verificateurs
        ));
    }
	
	/**
     * @Security("has_role('ROLE_MEMBRE')")
    */
	public function associationAction()
    {
        return $this->render('VFSNPBundle:Association:association.html.twig');
    }

}
