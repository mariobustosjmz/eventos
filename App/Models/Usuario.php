<?php
namespace App\Models;
defined("APPPATH") OR die("Acceso Denegado!");

use \App\Interfaces\Crud;
use \Core\Database;

class Usuario implements Crud {

	public static function getAll() {
		try {
			$connection = Database::instance();
			$sql        = "SELECT * from usuarios order by id_usuario desc ";
			$query      = $connection->prepare($sql);
			$query->execute();

			return $query->fetchAll();

		} catch (\PDOException $e) {
			print"Error!: ".$e->getMessage();
		}
	}

	public static function getById($id) {

	}

	public static function insert($usuario) {

		try {
			$respuesta       = new \StdClass();
			$respuesta->test = "respuesta de m usuario";

			$connection = Database::instance();

			$sql = "  INSERT INTO usuarios
			(nombre,
			correo,
			contrasena,
			rol_id,
			fecha_alta)
			VALUES(
			?,
			?,
			?,
			?,
			NOW()
			); ";

			$query = $connection->prepare($sql);

			$query->bindParam(1, $usuario['nombre']);//\PDO::PARAM_STR,255
			$query->bindParam(2, $usuario['correo']);
			$query->bindParam(3, $usuario['contrasena']);
			$query->bindParam(4, $usuario['rol_id']);

			$respuesta->query = $query;

			$respuesta->test2 = $usuario['nombre'];

			if ($query->execute()) {
				$respuesta->mensaje = true;
				return $respuesta;

			} else {
				$respuesta->mensaje = false;

				return $respuesta;
			}

		} catch (\PDOException $e) {
			print"Error!: ".$e->getMessage();
		}

	}

	public static function update($usuario) {

	}

	public static function delete($id) {

	}

	public static function getRoles() {

		try {
			$connection = Database::instance();
			$sql        = "SELECT * from roles order by id_rol desc ";
			$query      = $connection->prepare($sql);
			$query->execute();

			return $query->fetchAll(\PDO::FETCH_ASSOC);

		} catch (\PDOException $e) {
			print"Error!: ".$e->getMessage();
		}

	}

}
