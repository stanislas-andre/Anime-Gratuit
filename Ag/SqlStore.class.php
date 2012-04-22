<?php

class SqlStore {

	private $connected;		// Boolean

	public function __construct($server, $login, $password, $database) {
		if (mysql_connect($server, $login, $password)) {
			if (mysql_select_db($database)) {
				$this->connected = true;
			}
		}
	}

	/**
	* Make a query
	* @param String $query
	*/
	public function query($query) {
		return mysql_query($query);
	}

	/**
	* Verify if database connection is cleared
	* @return Boolean $this->connected
	*/
	public function getConnected() {
		return $this->connected;
	}

}