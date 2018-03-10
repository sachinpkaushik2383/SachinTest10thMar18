<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
		    'title' => 'Welcome!',
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
	
	/**
     * @Route("/list-symfony-github-repos", name="listgithubrepo")
     */
    public function listAction(Request $request)
    {
		try {
			$client = new \Github\Client();		
			$repositories = $client->api('user')->repositories('symfony');

			// replace this example code with whatever you need
			return $this->render('default/list.html.twig', array(
				'title' => 'List of GitHub Symfony Repositories',
				'repositories' => $repositories,
				'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR
			));
		
		} catch(\Exception $ex) {
			return $this->render('default/list-error.html.twig', array(
			    'title' => $ex->getMessage(),
			    'exception' => $ex->getMessage(),
				'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR
			));
		}	
    }
}
