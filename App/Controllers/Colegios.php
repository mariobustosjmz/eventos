<?php
namespace App\Controllers;
defined("APPPATH") OR die("Acceso Denegado!");
//si se accede con APPPATH sino mata la aplicacion y muestra Acceso Denegado

use \App\Models\Colegio as ModelColegios;
use \Core\Controller;
use \Core\View;

class Colegios extends Controller {

	public function index() {
		$colegios = ModelColegios::getAll();
		View::set('data', array('colegios' => $colegios));
		View::set('title', "COLEGIOS");
		View::render("colegios/index");
		View::render("colegios/nuevo_colegio");
		View::render("colegios/editar_colegio");

	}

	public function colegio($id = 1) {
		$colegio = ModelColegios::getById($id);

		if ($colegio) {
			echo json_encode($colegio);
		} else {
			echo "Error en Controllador";
		}

	}

	public function guardar_colegio() {

		if (isset($_GET['nombre'])) {

			$data    = $_GET;
			$colegio = ModelColegios::insert($data);

			echo json_encode($colegio);
		} else {
			echo "Error en Controllador";
		}

	}

	public function editar_colegio() {

		if (isset($_GET['nombre'])) {
			$data    = $_GET;
			$colegio = ModelColegios::update($data);

			echo json_encode($colegio);
		} else {
			echo "Error en Controllador";
		}
	}

	public function borrar_colegio($id = 1) {

		if (isset($id)) {
			$colegio = ModelColegios::delete($id);

			echo json_encode($colegio);
		} else {
			echo "Error en Controllador";
		}

	}

}
