<?php

namespace Platform\CoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 * @Route("/dashboard", name="dashboard")
	 */
	public function indexAction(Request $request)
	{
		return $this->render('PlatformCoreBundle:Dashboard:dashboard.html.twig');
	}
}
