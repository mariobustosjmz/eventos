<?php
namespace App\Models;
defined("APPPATH") OR die("Acceso Denegado!");

use \App\Interfaces\Crud;
use \Core\Database;

class Rol implements Crud {

	public static function getAll() {
		try {
			$connection = Database::instance();
			$sql = "SELECT * from roles order by id_rol desc ";
			$query = $connection->prepare($sql);
			$query->execute();

			return $query->fetchAll();
		} catch (\PDOException $e) {
			print "Error!: " . $e->getMessage();
		}
	}

	public static function getById($id) {
		try {
			$respuesta = new \StdClass();

			$connection = Database::instance();
			$sql = "SELECT * from roles WHERE id_rol = ?";
			$query = $connection->prepare($sql);
			$query->bindParam(1, $id, \PDO::PARAM_INT);

			$respuesta->query = $query;

			if ($query->execute()) {
				$respuesta->mensaje = true;

				$respuesta->data = $query->fetch();

				return $respuesta;
			} else {
				$respuesta->mensaje = false;

				return $respuesta;

			}

		} catch (\PDOException $e) {
			print "Error!: " . $e->getMessage();
		}
	}

	public static function insert($rol) {

		try {
			$respuesta = new \StdClass();

			$connection = Database::instance();
			$sql = "  INSERT INTO roles (nombre,nivel,fecha_alta) VALUES(?,?,NOW()); ";

			$query = $connection->prepare($sql);

			$query->bindParam(1, $rol['nombre']); //PDO::PARAM_STR,255
			$query->bindParam(2, $rol['nivel']);

			$respuesta->query = $query;

			if ($query->execute()) {
				$respuesta->mensaje = true;
				return $respuesta;

			} else {
				$respuesta->mensaje = false;

				return $respuesta;
			}

		} catch (\PDOException $e) {
			print "Error!: " . $e->getMessage();
		}
	}

	public static function update($rol) {

		try {
			$respuesta = new \StdClass();

			$connection = Database::instance();

			$update = "UPDATE roles SET
			nombre=:nomb ,
			nivel=:niv
 			WHERE id_rol=:id ";

			$query = $connection->prepare($update);

			$query->bindParam(':nomb', $rol['nombre']);
			$query->bindParam(':niv', $rol['nivel']);
			$query->bindParam(':id', $rol['id_rol'], \PDO::PARAM_INT);

			$respuesta->query = $query;

			if ($query->execute()) {
				$respuesta->mensaje = true;

				return $respuesta;
			} else {
				$respuesta->mensaje = false;

				return $respuesta;

			}

		} catch (\PDOException $e) {
			print "Existio un Error al Actualizar" . $e->getMessage();

		}
	}

	public static function delete($id) {

		try {
			$respuesta = new \StdClass();

			$connection = Database::instance();

			$sql = "DELETE FROM roles
			WHERE id_rol=:id";

			$query = $connection->prepare($sql);

			$query->bindParam(':id', $id);
			$respuesta->query = $query;

			if ($query->execute()) {
				$respuesta->mensaje = true;

				return $respuesta;
			} else {
				$respuesta->mensaje = false;

				return $respuesta;

			}

		} catch (\PDOException $e) {
			print "Existio un Error al Eliminar" . $e->getMessage();

		}

	}

}
