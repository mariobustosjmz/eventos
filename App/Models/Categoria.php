<?php
namespace App\Models;
defined("APPPATH") OR die("Acceso Denegado!");

use \App\Interfaces\Crud;
use \Core\Database;

class Categoria implements Crud {

	public static function getAll() {
		try {
			$connection = Database::instance();
			$sql = "SELECT * from categorias order by id_categoria desc ";
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
			$sql = "SELECT * from categorias WHERE id_categoria = ?";
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

	public static function insert($categoria) {

		try {
			$respuesta = new \StdClass();

			$connection = Database::instance();
			$sql = "  INSERT INTO categorias (nombre,descripcion,fecha_alta) VALUES(?,?,NOW()); ";

			$query = $connection->prepare($sql);

			$query->bindParam(1, $categoria['nombre']); //PDO::PARAM_STR,255
			$query->bindParam(2, $categoria['descripcion']);

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

	public static function update($categoria) {

		try {
			$respuesta = new \StdClass();

			$connection = Database::instance();

			$update = "UPDATE categorias SET
			nombre=:nomb ,
			descripcion=:des
 			WHERE id_categoria=:id ";

			$query = $connection->prepare($update);

			$query->bindParam(':nomb', $categoria['nombre']);
			$query->bindParam(':des', $categoria['descripcion']);
			$query->bindParam(':id', $categoria['id_categoria'], \PDO::PARAM_INT);

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

			$sql = "DELETE FROM categorias
			WHERE id_categoria=:id";

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
