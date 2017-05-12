<?php
namespace App\Interfaces;
defined("APPPATH") OR die("Acceso Denegado!");

interface Crud {
	public static function getAll();
	public static function getById($id);
	public static function insert($data);
	public static function update($data);
	public static function delete($id);
}
