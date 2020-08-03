<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**CONTROLADOR*/
/**
 * 
 */
class Home extends CI_Controller 
{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	



	public function index(){
		$this->load->view('home_view');
	}
	
	public function hola_mundo(){
		$titulo = 'hola mundo';
		$nombre = 'clon';
		$datos = array ('Titulo ' =>$titulo, 'nombre' =>$nombre);
		$this->load->view('mensaje_view', $datos);
	}


	public  function plantilla(){
		$this->load->view('plantilla_view');

	}
}
