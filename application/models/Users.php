<?php
class Users extends CI_Model {

    function __construct () {
        $this->load->database();   // Cargamos la base de datos
    }

    public function create ($datos) {   // Crear un usuario en el Login de registro
		$datos = [
			'nombre' => $datos['nombre'],          // Escribir tal cual esta en mysql para mandar estos datos
			'correo' => $datos['correo'],
			'contraseña' => $datos['contraseña'],
            'status' => 1,
            'rango' => 2
		];
        if(!$this->db->insert('usuarios', $datos)) { // Metodo inserting Data de codeigniter para enviar a mysql ('tabla', parámetro)
            return false;
        }
        return true;     // Si se ingresaron los datos retornar true, si no, false
    }  
}