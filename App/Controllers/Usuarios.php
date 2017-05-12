<?php
namespace App\Controllers;
defined("APPPATH") OR die("Acceso Denegado!");
//si se accede con APPPATH sino mata la aplicacion y muestra Acceso Denegado

use \App\Models\Usuario as ModelUsuarios;
use \Core\Controller;
use \Core\View;

class Usuarios extends Controller {

	public function index() {
		$usuarios = ModelUsuarios::getAll();
		View::set('data', array('usuarios' => $usuarios));
		View::set('title', "USUARIOS");

		$roles = ModelUsuarios::getRoles();
		View::set('roles', $roles);

		View::render("usuarios/index");
		View::render("usuarios/nuevo_usuario");
		View::render("usuarios/editar_usuario");

	}

	public function usuario($id = 1) {

	}

	public function guardar_usuario() {

		if (isset($_GET['nombre'])) {
			$data    = $_GET;
			$usuario = ModelUsuarios::insert($data);
			echo json_encode($usuario);

		} else {

			echo json_encode('Error en Contralador');
		}

	}

	public function editar_usuario() {

	}

	public function borrar_usuario($id = 1) {

	}

	public function getUsuarios() {

		$usuarios = ModelUsuarios::getAll();
		echo json_encode($usuarios, JSON_PRETTY_PRINT);
	}

}
