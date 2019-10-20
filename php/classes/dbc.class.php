<?php

class dbc {
private $server;
private $user;
private $password;
private $bd;

protected function connect(){
	$this->server ="localhost";
	$this->user = "root";
	$this->password = "";
	$this->bd = "eye_db";

	$conn = new mysqli( $this->server ="localhost",
						$this->user = "root",
						$this->password = "",
						$this->bd = "eye_db"
					);
	if (!$conn){echo "Error connect to base of data";}
	return $conn;
}

}

?>