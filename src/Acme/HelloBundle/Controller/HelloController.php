<?php
// src/Acme/HelloBundle/Controller/HelloController.php
namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
	public function indexAction($first_name, $last_name, $color)
	{
		return new Response('<html><body>Hello '.$first_name.' '. $last_name .' - ' . $color . '!</body></html>');
	}

}