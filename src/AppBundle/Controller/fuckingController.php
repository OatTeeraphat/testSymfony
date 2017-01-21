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
     * @Route("/fucking")
     */
    public function fuckingAction()
    {
		return new Response('Fuck the World Symfony');
	}

}
?>