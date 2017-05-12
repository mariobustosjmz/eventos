<?php
namespace App\Models;
defined("APPPATH") OR die("Acceso Denegado!");

use \App\Interfaces\Crud;
use \Core\Database;

class Colegio implements Crud {

	public static function getAll() {
		try {
			$connection = Database::instance();
			$sql        = "SELECT * from colegios order by id_colegio desc ";
			$query      = $connection->prepare($sql);
			$query->execute();

			return $query->fetchAll();
		} catch (\PDOException $e) {
			print"Error!: ".$e->getMessage();
		}
	}

	public static function getById($id) {
		try {
			$respuesta = new \StdClass();

			$connection = Database::instance();
			$sql        = "SELECT * from colegios WHERE id_colegio = ?";
			$query      = $connection->prepare($sql);
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
			print"Error!: ".$e->getMessage();
		}
	}

	public static function insert($colegio) {

		try {
			$respuesta = new \StdClass();

			$connection = Database::instance();

			$sql = "  INSERT INTO colegios (nombre,ubicacion,alumnos,fecha_alta) VALUES(?,?,?,NOW()); ";

			$query = $connection->prepare($sql);

			$query->bindParam(1, $colegio['nombre']);//\PDO::PARAM_STR,255
			$query->bindParam(2, $colegio['ubicacion']);
			$query->bindParam(3, $colegio['alumnos']);

			$respuesta->query = $query;
			$respuesta->test  = "test value";

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

	public static function update($colegio) {

		try {
			$respuesta = new \StdClass();

			$connection = Database::instance();

			$update = "UPDATE colegios SET
			nombre=:nomb ,
			ubicacion=:ubic ,
			alumnos=:alum
			WHERE id_colegio=:id ";

			$query = $connection->prepare($update);

			$query->bindParam(':nomb', $colegio['nombre']);
			$query->bindParam(':ubic', $colegio['ubicacion']);
			$query->bindParam(':alum', $colegio['alumnos']);
			$query->bindParam(':id', $colegio['id_colegio'], \PDO::PARAM_INT);

			$respuesta->query = $query;

			if ($query->execute()) {
				$respuesta->mensaje = true;

				return $respuesta;
			} else {
				$respuesta->mensaje = false;

				return $respuesta;

			}

		} catch (\PDOException $e) {
			print"Existio un Error al Actualizar".$e->getMessage();

		}
	}

	public static function delete($id) {

		try {
			$respuesta = new \StdClass();

			$connection = Database::instance();

			$sql = "DELETE FROM colegios
			WHERE id_colegio=:id";

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
			print"Existio un Error al Eliminar".$e->getMessage();

		}

	}

}
