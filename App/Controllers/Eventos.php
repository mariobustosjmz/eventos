<?php
namespace App\Controllers;
defined("APPPATH") OR die("Acceso Denegado!");
//si se accede con APPPATH sino mata la aplicacion y muestra Acceso Denegado
use \App\Models\Evento as ModelEventos;
use \Core\Controller;
use \Core\View;

class Eventos extends Controller {

	public function index() {
		$eventos = ModelEventos::getAll();
		View::set('data', array('eventos' => $eventos));
		View::set('title', "EVENTOS");

		$colegios = ModelEventos::getColegios();
		View::set('colegios', $colegios);

		$categorias = ModelEventos::getCategorias();
		View::set('categorias', $categorias);

		View::render("eventos/index");
		View::render("eventos/nuevo_evento");
		View::render("eventos/editar_evento");

	}

	public function evento($id = 1) {

	}

	public function guardar_evento() {

	}

	public function editar_evento() {

	}

	public function borrar_evento($id = 1) {

	}

	//METHODOS IMG

	public function upload() {
		$output_dir = UPLOADSPATH;

		//echo $output_dir;
		//print_r($_FILES);

		if (isset($_FILES["myfile"])) {
			$ret = array();

			//	This is for custom errors;
			/*	$custom_error= array();
				$custom_error['jquery-upload-file-error']="File already exists";
				echo json_encode($custom_error);
				die();
			*/
			$error = $_FILES["myfile"]["error"];
			//You need to handle  both cases
			//If Any browser does not support serializing of multiple files using FormData()
			if (!is_array($_FILES["myfile"]["name"])) //single file
			{
				$fileName = $_FILES["myfile"]["name"];
				move_uploaded_file($_FILES["myfile"]["tmp_name"], $output_dir . $fileName);
				$ret[] = $fileName;
			} else //Multiple files, file[]
			{
				$fileCount = count($_FILES["myfile"]["name"]);
				for ($i = 0; $i < $fileCount; $i++) {
					$fileName = $_FILES["myfile"]["name"][$i];
					move_uploaded_file($_FILES["myfile"]["tmp_name"][$i], $output_dir . $fileName);
					$ret[] = $fileName;
				}

			}
			echo json_encode($ret);
		} else {
			//	echo "error";
		}

	}

	public function load() {

		$dir = UPLOADSPATH;
		$server_path = "../Uploads/";
		$files = scandir($dir);
		$ret = array();
		foreach ($files as $file) {
			if ($file == "." || $file == "..") {
				continue;
			}

			$filePath = $dir . "/" . $file;
			$details = array();
			$details['name'] = $file;
			//$details['path'] = $filePath;
			//$details['path'] = UPLOADSPATH.$file;
			$details['path'] = $server_path . $file;
			$details['size'] = filesize($filePath);
			$ret[] = $details;
		}
		echo json_encode($ret);

	}

	public function delete() {
		$output_dir = UPLOADSPATH;
		if (isset($_POST["op"]) && $_POST["op"] == "delete" && isset($_POST['name'])) {
			$fileName = $_POST['name'];
			$fileName = str_replace("..", ".", $fileName); //required. if somebody is trying parent folder files
			$filePath = $output_dir . $fileName;
			if (file_exists($filePath)) {
				unlink($filePath);
			}
			echo "Deleted File " . $fileName . "<br>";
		}

	}
	public function download($test, $filename = "") {

		echo $filename;
		if (($filename)) {
			$fileName = $filename;
			$fileName = str_replace("..", ".", $fileName); //required. if somebody is trying parent folder files
			$file = UPLOADSPATH . $fileName;
			$file = str_replace("..", "", $file);
			if (file_exists($file)) {
				$fileName = str_replace(" ", "", $fileName);
				header('Content-Description: File Transfer');
				header('Content-Disposition: attachment; filename=' . $fileName);
				header('Content-Transfer-Encoding: binary');
				header('Expires: 0');
				header('Cache-Control: must-revalidate');
				header('Pragma: public');
				header('Content-Length: ' . filesize($file));
				ob_clean();
				flush();
				readfile($file);
				exit;
			}
		}

	}

}
