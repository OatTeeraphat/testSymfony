<?php 

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
* 
*/
class fuckingController extends Controller
{
    /**
     * @Route("/fucking/{fuckName}")
     */
    public function fuckingAction($fuckName)
    {
    	$fuckReason = ['i','need','you'];

    	$templating = $this->container->get('templating');
    	$html = $templating->render('/fuck/fucking.html.twig', [
            'name' => $fuckName,
            'reason' => $fuckReason
        ]);

		return new Response($html);
	}

}
?>