<?php
namespace App\Controllers;
defined("APPPATH") OR die("Acceso Denegado!");
//si se accede con APPPATH sino mata la aplicacion y muestra Acceso Denegado

use \App\Models\Categoria as ModelCategorias;
use \Core\Controller;
use \Core\View;

class Categorias extends Controller {

	public function index() {
		$categorias = ModelCategorias::getAll();
		View::set('data', array('categorias' => $categorias));
		View::set('title', "CATEGORIAS");
		View::render("categorias/index");
		View::render("categorias/nueva_categoria");
		View::render("categorias/editar_categoria");

	}

	public function categoria($id = 1) {
		$categoria = ModelCategorias::getById($id);

		if ($categoria) {
			echo json_encode($categoria);
		} else {
			echo "Error en Controllador";
		}

	}

	public function guardar_categoria() {

		if (isset($_GET['nombre'])) {
			$data = $_GET;
			$categoria = ModelCategorias::insert($data);

			echo json_encode($categoria);
		} else {
			echo "Error en Controllador";
		}

	}

	public function editar_categoria() {

		if (isset($_GET['nombre'])) {
			$data = $_GET;
			$categoria = ModelCategorias::update($data);

			echo json_encode($categoria);
		} else {
			echo "Error en Controllador";
		}
	}

	public function borrar_categoria($id = 1) {

		if (isset($id)) {
			$categoria = ModelCategorias::delete($id);

			echo json_encode($categoria);
		} else {
			echo "Error en Controllador";
		}

	}

}
