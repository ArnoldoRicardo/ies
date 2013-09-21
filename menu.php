<?php
/**
* @author ARLF
*/
class Menu{

	/**
	*	@var $menu array(nivel impar) con sub-array asociativos(nivel impar).
	*	
	*	Los array asociativo representa un elemento en el menu, en donde:
	*	
	*	GET: parametro que se pasa por url para validarlo.
	*	name: contenido entre <li>,<a>.
	*	description: atributo "data-description" de <a>.
	*	link: atributo "href" de <a>.
	*	sub: aqui se agrega un nuevo submenu(siendo impar, seria un array 
	*		iterativo).
	*/
	private $menu = array(
			0 => array(
				'GET' => 'index',
				'name' => 'Inicio',
				'description' => 'comienzo',
				'link' => 'index.html'
			),
			1 => array(
				'GET' => 'blog',
				'name' => 'blog',
				'description' => 'día a día',
				'link' => 'http://blog.iesfrosur.edu.mx/'
			),
			2 => array(
				'GET' => 'posgrados',
				'name' => 'Posgrados',
				'description' => 'Especializate',
				'link' => '#',
				'sub' => array(
					0 => array(
						'GET' => 'doctorados',
						'name' => 'Doctorados',
						'link' => 'doctorados.html',
						'sub' => array(
							0 => array(
								'GET' => 'doctorado-educacion',
								'name' => 'Educaci&#243;n',
								'link' => 'doctorado-educacion.html'
							)
						)
					),
					1 => array(
						'GET' => 'maestrias',
						'name' => 'Maestrias',
						'link' => 'maestrias.html',
						'sub' => array(
							0 => array(
								'GET' => 'maestria-educacion.html',
								'name' => 'Educaci&#243;n',
								'link' => 'maestrias.html'
							),
							1 => array(
								'GET' => 'ciencias-penales',
								'name' => 'Ciencias Penales',
								'link' => 'ciencias-penales.html'
							),
							2 => array(
								'GET' => 'ciencias-de-la-computacion',
								'name' => 'Ciencias de la Computaci&#243;n',
								'link' => 'ciencias-de-la-computacion.html'
							),
							3 => array(
								'GET' => 'maestria-administracion',
								'name' => 'Administraci&#243;n',
								'link' => 'maestria-administracion.html'
							)
						)
					)
				)
			),
			3 => array(
				'GET' => 'licenciaturas',
				'name' => 'Licenciaturas',
				'description' => 'Formate como profesionista',
				'link' => 'licenciaturas.html',
				'sub' => array(
					0 => array(
						'GET' => 'informatica',
						'name' => 'Inform&#225;tica Administrativa',
						'link' => 'informatica.html'
					),
					1 => array(
						'GET' => 'derecho',
						'name' => 'Derecho',
						'link' => 'derecho.html'
					),
					2 => array(
						'GET' => 'contaduria',
						'name' => 'Contadur&#237;a P&#250;blica',
						'link' => 'contaduria.html'
					),
					3 => array(
						'GET' => 'administracion',
						'name' => 'Administraci&#243;n de Empresas',
						'link' => 'administracion.html'
					)
				)
			),
			4 => array(
				'GET' => 'contacto',
				'name' => 'Contacto',
				'description' => 'nuestros datos',
				'link' => 'contacto.html',
				'sub' => array(
					0 => array(
						'GET' => 'comalapa',
						'name' => 'Comalapa',
						'link' => 'comalapa.html',
					),
					1 => array(
						'GET' => 'siltepec',
						'name' => 'Siltepec',
						'link' => 'siltepec.html',
					),
					2 => array(
						'GET' => 'motozintla',
						'name' => 'Motozintla',
						'link' => 'motozintla.html',
					),
					3 => array(
						'GET' => 'about-us',
						'name' => 'Acerca De',
						'link' => 'about-us.html',
					)															
				)
			)
	);

	function printMenu($pag){

		$nav = "<ul>";

		foreach ($this->menu as $subMenu){

			$current = $this->current($pag , $subMenu["GET"]);
			$nav .= '<li'.$current.'><a href="'.$subMenu['link'].'"data-description="'.$subMenu['description'].'">'.$subMenu['name'].'</a>';

			if($subMenu["sub"]){

				$nav .= "<ul>";
				foreach ($subMenu["sub"] as $subSubMenu) {

					$current = $this->current($pag , $subSubMenu['GET']);
					$nav .= '<li'.$current.'><a href="'.$subSubMenu['link'].'">'.$subSubMenu['name'].'</a>';

					if($subSubMenu["sub"]){

						$nav .= "<ul>";
						foreach ($subSubMenu["sub"] as $subSubSubMenu) {

							$current = $this->current($pag , $subSubSubMenu['GET']);
							$nav .= '<li'.$current.'><a href="'.$subSubSubMenu['link'].'">'.$subSubSubMenu['name'].'</a>';
						}
						$nav .= "</ul>";
					}
				}
				$nav .= "</ul>";
			}
			$nav .= "</li>";
		}	
		$nav .= "</ul>";
		echo $nav;
	}

	/**
	* cada case representa el punto final
	*/
	private function current($pag, $GET){
		$pages;
		$return = "";
		switch ($pag) {
			case 'blog':
				$pages = array('blog');
				break;

			case 'posgrados':
				$pages = array('posgrados');
				break;

			case 'doctorados':
				$pages = array('posgrados','doctorados');
				break;

			case 'doctorado-educacion':
				$pages = array('posgrados','doctorados','doctorado-educacion');
				break;

			case 'maestrias':
				$pages = array('posgrados','maestrias');
				break;

			case 'maestria-educacion':
				$pages = array('posgrados','maestrias','maestria-educacion');
				break;

			case 'ciencias-penales':
				$pages = array('posgrados','maestrias','ciencias-penales');
				break;

			case 'ciencias-de-la-computacion':
				$pages = array('posgrados','maestrias','ciencias-de-la-computacion');
				break;

			case 'maestria-administracion':
				$pages = array('posgrados','maestrias','maestria-administracion');
				break;

			case 'licenciaturas':
				$pages = array('licenciaturas');
				break;

			case 'informatica':
				$pages = array('licenciaturas','informatica');
				break;

			case 'derecho':
				$pages = array('licenciaturas','derecho');
				break;

			case 'contaduria':
				$pages = array('licenciaturas','derecho');
				break;

			case 'administracion':
				$pages = array('licenciaturas','administracion');
				break;

			case 'contacto':
				$pages = array('contacto');
				break;

			case 'comalapa':
				$pages = array('contacto','comalapa');
				break;

			case 'siltepec':
				$pages = array('contacto','siltepec');
				break;

			case 'motozintla':
				$pages = array('contacto','motozintla');
				break;

			case 'about-us':
				$pages = array('contacto','about-us');
				break;

			case 'index':
			default:
				$pages = array('index');
				break;
		}

		foreach ($pages as $page) {
			if($page == $GET){
				$return = ' class="current"';
				break;
			}
		}

		return $return;
	}

	private function subMenu(){
		//
	}
}

?>