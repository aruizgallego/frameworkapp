<?php

namespace Controller\Home;

use Mpwarfwk\BaseController;
use Mpwarfwk\Components\Request;
use Mpwarfwk\Components\Response;
use Mpwarfwk\Components\JsonResponse;
use Mpwarfwk\Components\Container;

Class Home extends BaseController
{

	public function welcome(Request $request){
	
		$template_variables = array();
		$response = new Response($this->twig->render( 'welcome.twig', $template_variables ));
		return $response;

	}

	public function response(Request $request){
		
		//Usando response
		$response = new Response ("Escribiendo a través de Response");
		return $response;

	}

	public function jsonResponse(Request $request){
		
		//Usando JsonResponse
		$response = new JsonResponse ("Escribiendo un json con JsonResponse");
		return $response;

	}

	public function smartyResponse(Request $request){

		//Usando Smarty
		$template_variables = array( 
		    'name'      => 'Pablo'
		);
		
		$response = new Response($this->smarty->render('hello.tpl', $template_variables));
		return $response;
	}

	public function twigResponse(Request $request){
		
		//Usando Twig
		$template_variables = array( 
		    'name'      => 'Pablo'
		);
		$response = new Response($this->twig->render( 'bye.twig', $template_variables ));

		return $response;
	}

	public function useContainerService1(Request $request){
	
		$container = new Container();

		$container->get('TemplateService1')->run();
		$response = new Response ("Usando el Service1 con Container");
		return $response;
	}

	public function useContainerService2(Request $request){
	
		$container = new Container();

		$container->get('TemplateService2')->run();
		
		$response = new Response ("Usando el Service2 con Container y inyección de dependencias");
		return $response;
	}

	public function clasification(Request $request){
	
		$query = "
			SELECT *
			FROM mydb.clasification
			ORDER BY points DESC";

		$this->db->query($query);
		$result = $this->db->resultSet();

		$clasification = array(
			'clasification' => $result
		);

		$response = new Response($this->twig->render( 'clasification.twig', $clasification ));
		return $response;
	}

	public function usei18n(Request $request){
	
		$keyword =  $this->i18n->get('palabra','ca');

		$response = new Response ( $keyword );
		return $response;
	}

}