<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function  __construct()        // Metodo que se ejecuta al instanciar la clase Login
	{
		parent::__construct();            // Método constructor de la clase padre (CI_Controller)
		$this->load->helper('getMenu');   // Cargando un helper, sin escribir _helper.php.
	}

	public function index()
	{
		$data['menu'] = main_menu();      // Para utilizar el helper solo traemos la clase dentro de getMenu_helper.php
		$this->load->view('login',$data);
	}
}
