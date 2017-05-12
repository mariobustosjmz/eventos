<?php
namespace App\Controllers;
defined("APPPATH") OR die("Acceso Denegado!");
//si se accede con APPPATH sino mata la aplicacion y muestra Acceso Denegado

use \App\Models\Rol as ModelRoles;
use \Core\Controller;
use \Core\View;

class Roles extends Controller {

	public function index() {
		$roles = ModelRoles::getAll();
		View::set('data', array('roles' => $roles));
		View::set('title', "ROLES");
		View::render("roles/index");
		View::render("roles/nuevo_rol");
		View::render("roles/editar_rol");

	}

	public function rol($id = 1) {
		$rol = ModelRoles::getById($id);

		if ($rol) {
			echo json_encode($rol);
		} else {
			echo "Error en Controllador";
		}

	}

	public function guardar_rol() {

		if (isset($_GET['nombre'])) {
			$data = $_GET;
			$rol = ModelRoles::insert($data);

			echo json_encode($rol);
		} else {
			echo "Error en Controllador";
		}

	}

	public function editar_rol() {

		if (isset($_GET['nombre'])) {
			$data = $_GET;
			$rol = ModelRoles::update($data);

			echo json_encode($rol);
		} else {
			echo "Error en Controllador";
		}
	}

	public function borrar_rol($id = 1) {

		if (isset($id)) {
			$rol = ModelRoles::delete($id);

			echo json_encode($rol);
		} else {
			echo "Error en Controllador";
		}

	}

}
