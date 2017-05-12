<?php
namespace App\Controllers;
defined("APPPATH") OR die("Acceso Denegado!");
//si se accede con APPPATH sino mata la aplicacion y muestra Acceso Denegado

use \Core\Controller;
use \Core\View;

class Home extends Controller {

	public function test() {
		View::set("data", "Data");
		View::set("title", "SISTEMA EVENTOS");
		View::render("template/index");
	}
	public function index() {
		View::set("mensaje", "Inicio");
		View::set("title", "SISTEMA EVENTOS");
		View::render("home/index");
	}
	public function saludo($nombre, $edad) {
		echo "Hola " . $nombre . '-' . $edad;
	}

}
