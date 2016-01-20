<?php

namespace Kiwi\CoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProjectController extends Controller
{
	/**
	 * @Route("/project/list", name="projects")
	 */
	public function indexAction(Request $request)
	{
		return $this->render('KiwiCoreBundle:Project:list_project.html.twig');
	}
}
