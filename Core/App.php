<?php
namespace Core;
defined("APPPATH") OR die("Acceso Denegado!");

class App {

	private $_controllador_default = "home";

	private $_controller;

	private $_method = "index";

	private $_params = [];

	public $config = [];

	const NAMESPACE_CONTROLLERS = "\App\Controllers\\";

	const CONTROLLERS_PATH = "../App/Controllers/";

	public function __construct() {
		//obtenemos la url parseada
		$url = $this->parseUrl();

		//comprobar que exista el archivo en el directorio Controllers , ucfirst =>primero a mayusculas
		if (file_exists(self::CONTROLLERS_PATH . ucfirst($url[0]) . ".php")) {
			$this->_controller = ucfirst($url[0]);
			//eliminamos el primero de url, así sólo nos quedaran los parámetros del método
			unset($url[0]);
		} else {
			include APPPATH . "/Views/errors/404.php";
			exit;
		}

		//obtenemos la clase con su espacio de nombres
		$fullClass = self::NAMESPACE_CONTROLLERS . $this->_controller;

		//asociamos la instancia a $this->_controller
		$this->_controller = new $fullClass;

		//CONTROLLADOR // METHODO //PARAMETROS
		//
		//si existe el segundo segmento comprobamos que el método exista en esa clase
		if (isset($url[1])) {

			//pasar el metodo método
			$this->_method = $url[1];
			if (method_exists($this->_controller, $url[1])) {
				//eliminamos el método de url, así sólo nos quedaran los parámetros del método
				unset($url[1]);
			} else {
				throw new \Exception("Error Processing Method {$this->_method}", 1);
			}
		}
		//asociamos el resto de segmentos a $this->_params para pasarlos al método llamado, por defecto será un array vacío
		$this->_params = $url ? array_values($url) : [];

	}

	public function parseUrl() {

		if (isset($_GET["url"])) {
			return explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));
		} else {

			return array($this->_controllador_default);
		}
	}

	/**
	 * [lanzamos el controlador/método que se ha llamado con los parámetros]
	 */
	public function render() {
		// Llamar a la función test() con n argumentos

		call_user_func_array([self::getController(), self::getMethod()], self::getParams());
	}
	/**

	/**
	 * [ Obtenemos la configuración de la app]
	 */
	public static function getConfig() {
		//print_r(parse_ini_file(APPPATH . '/Config/Config.ini'));
		return parse_ini_file(APPPATH . '/Config/Config.ini');
	}

	/**
	 * [Devolvemos el controlador actual]
	 */
	public function getController() {
		return $this->_controller;
	}

	/**
	 * [Devolvemos el método actual]
	 */
	public function getMethod() {
		return $this->_method;
	}

	/**
	 * [getParams  ]
	 */
	public function getParams() {
		return $this->_params;
	}
}
