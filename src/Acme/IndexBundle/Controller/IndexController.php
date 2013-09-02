<?php
// src/Acme/HelloBundle/Controller/HelloController.php
namespace Acme\IndexBundle\Controller;

//use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\IndexBundle\Entity\Articles;

class IndexController extends Controller
{
	/**
	 * @Template()
	 */
	public function indexAction()
	{
		//return new Response('<html><body>Hello!</body></html>');
		//return array();
		
		$articles = $this->getDoctrine()->getRepository('AcmeIndexBundle:Articles');
		
		$result = $articles->findAll();
		
		$articles_array = array();
		
		foreach ($result as $art) {
			$articles_array[] = array('id'=>$art->getId(), 'title'=>$art->getTitle());
		}
		
		return $this->render(
				'AcmeIndexBundle:Index:articles.html.twig',
				array('articles' => $articles_array)
		);
	}
	
	public function testAction()
	{
		//return new Response('<html><body>Welcome to my website!</body></html>');
	}
}