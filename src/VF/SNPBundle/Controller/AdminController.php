<?php

namespace VF\SNPBundle\Controller;

use VF\SNPBundle\Entity\Garde;
use VF\SNPBundle\Entity\Membre;
use VF\SNPBundle\Form\MembreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends Controller
{
    /**
     * @Security("has_role('ROLE_ADMIN')")
    */
	public function adminAction()
	{
		return $this->render('VFSNPBundle:Admin:admin.html.twig');
	}
	
	/**
     * @Security("has_role('ROLE_ADMIN')")
    */
	public function faitTableGardeAction()
	{
	    //vide la table garde avant de la remplir
	    $em = $this->getDoctrine()->getManager();
	    $repoG = $this->getDoctrine()->getManager()->getRepository('VFSNPBundle:Garde');
		$listeTous=$repoG->findAll();
		foreach($listeTous as $g)
		{
			$em->remove($g);
			$em->flush();
		}
	    
		//rempli la table garde
	    $ped_haut='';
		$ped_bas='';
        $data = array();
		$N=0;
         if (($handle = fopen("docu/GardesTransmis1516.csv", 'r')) !== FALSE)
        {
            while (($row = fgetcsv($handle, 1000, ';')) !== FALSE)
            { 
			    if ($N==0) {		//traite ligne 1 pour définir la liste des pédiatres
				    for ($i = 0; $i <count($row); ++$i){$row[$i]=utf8_encode($row[$i]);}
				    $pediatres=$row;
					}
                //traite chaque ligne
				//nombre d'éléments dans une ligne (nb). Pour garde en haut => nom pédiatre ajouté dans $ped_haut et si en bas dans $ped_bas
				$nb=count($pediatres);
				for ($i = 0; $i <$nb; ++$i){
			        if($row[$i]=='h'){$ped_haut=$pediatres[$i];}
					if($row[$i]=='b'){$ped_bas=$pediatres[$i];}
				    }
				
				if($N>0){
				    $data[$N] = array($row[1],$row[2],$row[3],$row[4],$ped_haut,$ped_bas);
					$garde= new Garde();
					$t=$row[3];
					$jour=substr($t,0,2);
					$mois=substr($t,3,2);
					$an=substr($t,6,4);
					$texte=$an . '-' . $mois .'-' .$jour;
					$date= New \DateTime($texte);
					$garde->setSpecial($row[1]);
					$garde->setFerie($row[2]);
					$garde->setDate($date);
					$garde->setJour($row[4]);
					$garde->setHaut($ped_haut);
					$garde->setBas($ped_bas);
					$em->persist($garde);
                    $em->flush();
				}
				$N++;
            }
            fclose($handle);
			
			return $this->render('VFSNPBundle:Admin:faitTableGarde.html.twig', array('listeGardiens' => $data));
        }
		else 
		{
		   //throw new NotFoundHttpException('Fichier docu/GardesTransmis1516.csv non trouvé.');
            return $this->render('VFSNPBundle:TwigBundle:error.html.twig', array(
			'status_text' => 'Le fichier SNP/web/docu/GardesTransmis1516.csv n\'a pas été trouvé.',
		    'status_code' => 'Erreur à l\'ouverture d\'un fichier'
			));
		}
                		
	}
	
	/**
     * @Security("has_role('ROLE_ADMIN')")
    */
	public function majUserIdMembreAction()
    {
		/* Met à jour les membre_id de user avec les id de membre dans la BDD*/
	    $repository = $this->getDoctrine()->getManager()->getRepository('VFSNPBundle:Membre');
		$userManager = $this->get('fos_user.user_manager');
	    $users = $userManager->findUsers();
		$membres=$repository->findAll();
		$data=array();
		$N=count($users);
		for($i = 0; $i < $N; $i++){
		    $trouve=false;	// true si un User à un membre correspondant, false sinon
		    $user=$users[$i];
			$email =$user->getEmail();
            foreach($membres as $m){
			    if($m->getCourriel() == $user->getEmail()){
			        $data[$i]=array('membre' => $m,'user' => $user);
					$user->setMembre($m->getId());
					$trouve=true;
					}
			}
            if($trouve==false){throw $this->createNotFoundException('Aucun membre du fichier de la SNP ne correspond à l\'utilisateur ' . $user->getUsername() .'.');}			
		
        }
		/* Fin de mise à jour */
		return $this->render('VFSNPBundle:Admin:majUserIdMembre.html.twig', array(
		'liste' => $data));
	}

}
