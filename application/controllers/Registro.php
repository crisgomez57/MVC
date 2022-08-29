<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function  __construct()
	{
		parent::__construct();
		$this->load->helper('getMenu');      // Cargamos el helper getMenu
		$this->load->database();             // Cargamos la base de datos
		$this->load->model('Users');         // Invocamos el Modelo Users en la clase create
	}

	public function index()
	{
		$data['menu'] = main_menu();         
		$this->load->view('registro',$data);
	}

    public function create () {
    	$username = $this->input->post('username');  // Guardamos los datos del formulario
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password_c = $this->input->post('password_confirm');
		$datos = [
			'nombre' => $username,          // Escribir tal cual esta en mysql
			'correo' => $email,
			'contraseña' => $password
		];

		$data['menu'] = main_menu();

		if(!$this->Users->create($datos)) {    // Estamos pasandole los datos a la clase create del modelo Users
			$data['message'] = 'Ocurrió un error al ingresar los datos, intente nuevamente';
			$this->load->view('registro', $data);    // Si no se manda los datos, retornar la vista actual nuavamente
		}
		$data['message'] = 'Registrado Correctamente!!';
			$this->load->view('registro', $data);      
	}
}