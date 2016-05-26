<?php

require_once("define.php");


final class MySQL {
	public $conn;


	public function __construct($hostname, $username, $password, $database) {
		$this->conn = new \mysqli($hostname, $username, $password, $database);

		if ($this->conn->connect_error) {
			trigger_error('Error: Could not make a database link (' . $this->conn->connect_errno . ') ' . $this->conn->connect_error);
			exit();
		}

		$this->conn->set_charset("utf8");
		$this->conn->query("SET SQL_MODE = ''");
	}



public function query($sql) {		

		$query = $this->conn->query($sql);

		if (!$this->conn->errno) {
			if ($query instanceof \mysqli_result) {
				$data = array();

				while ($row = $query->fetch_assoc()) {
					$data[] = $row;
				}

				$result = new \stdClass();
				$result->num_rows = $query->num_rows;
				$result->row = isset($data[0]) ? $data[0] : array();
				$result->rows = $data;

				$query->close();

				return $result;
			} else {
				return true;
			}
		} else {
			trigger_error('Error: ' . $this->conn->error  . '<br />Error No: ' . $this->conn->errno . '<br />' . $sql);
		}
}


public function getLastId() {
		if ($this->conn) {
			return mysqli_insert_id($this->conn);
		}
	}


public function closeconnection() {
		if ($this->conn) {
			mysqli_close($this->conn);
		}
	}

public function __destruct() {
		$this->conn->close();
	}
}

?>