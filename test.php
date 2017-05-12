<?php
class Database {

	private $host = "localhost";
	private $db_name = "eventos";
	private $username = "root";
	private $password = "root";
	public $conn;

	public function getConnection() {

		$this->conn = null;

		try {

			$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch (PDOException $exception) {
			echo "Connection error: " . $exception->getMessage();
		}

		return $this->conn;
	}

}

$db = new Database();
$test = $db->getConnection();
//$query = "select id_categoria,nombre,descripcion,fecha_alta from categorias ";

$query = "describe eventos";
$stmt = $db->conn->prepare($query);
printf($stmt->execute());
echo "<hr>";
print_r($stmt);
echo "<hr>";

$stmt = $stmt->fetchAll(PDO::FETCH_ASSOC); //(PDO::FETCH_ASSOC);
print_r($stmt);

?>