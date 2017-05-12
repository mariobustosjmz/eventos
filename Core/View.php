<?php
namespace Core;
defined("APPPATH") OR die("Acceso Denegado!");

define("ASSETS_PATH", "../App/Views/assets/");

define("VIEWS_PATH", "../App/Views/");

class View {

	protected static $data;

	const EXTENSION_TEMPLATES = "php";

	public static function render($template) {
		if (!file_exists(VIEWS_PATH . $template . "." . self::EXTENSION_TEMPLATES)) {
			throw new \Exception("Error: El archivo " . VIEWS_PATH . $template . "." . self::EXTENSION_TEMPLATES . " no existe", 1);
		}

		//print_r(self::$data);
		ob_start(); //activa buffer
		extract(self::$data); //limpia arrays
		include VIEWS_PATH . $template . "." . self::EXTENSION_TEMPLATES;
		$str = ob_get_contents(); //devuelve el contenido del buffer
		ob_end_clean();
		echo $str;
	}

	//asigna a una clave un valor
	public static function set($name, $value) {
		self::$data[$name] = $value;
	}
}
