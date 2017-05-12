<?php
namespace App\Models;
defined("APPPATH") OR die("Acceso Denegado!");

use \App\Interfaces\Crud;
use \Core\Database;

class Evento implements Crud {

	public static function getAll() {
		try {
			$connection = Database::instance();

			$sql = "SELECT
    		 *,
			titulo,
			contenido,
			colegios.nombre as nombre_colegio,
			fecha_inicio as inicio,
			fecha_fin as fin,
			fecha_pub as publicacion,
			categorias.nombre as nombre_categoria,
			archivo as adjunto ,
			tipo

			FROM
			eventos INNER JOIN eventos_colegios
			ON eventos.id_evento = eventos_colegios.evento_id
			INNER JOIN eventos_file
			ON eventos.id_evento = eventos_file.evento_id
			INNER JOIN categorias
			ON eventos.categoria_id = categorias.id_categoria
			INNER JOIN colegios
			ON eventos_colegios.colegio_id = colegios.id_colegio";

			$query = $connection->prepare($sql);
			$query->execute();

			return $query->fetchAll();

		} catch (\PDOException $e) {
			print "Error!: " . $e->getMessage();
		}
	}

	public static function getById($id) {

	}

	public static function insert($evento) {

	}

	public static function update($evento) {

	}

	public static function delete($id) {

	}

	public static function getColegios() {

		try {
			$connection = Database::instance();
			$sql = "SELECT * from colegios order by id_colegio desc ";

			$query = $connection->prepare($sql);
			$query->execute();

			return $query->fetchAll(\PDO::FETCH_ASSOC);

		} catch (\PDOException $e) {
			print "Error!: " . $e->getMessage();
		}

	}
	public static function getCategorias() {

		try {
			$connection = Database::instance();
			$sql = "SELECT * from categorias order by id_categoria desc ";

			$query = $connection->prepare($sql);
			$query->execute();

			return $query->fetchAll(\PDO::FETCH_ASSOC);

		} catch (\PDOException $e) {
			print "Error!: " . $e->getMessage();
		}

	}

}
