<?php
class SqlStore {

	private $connected;

	public function __construct($login, $password, $server, $database) {
		if (mysql_connect($server, $login, $password)) {
			if (mysql_select_db($database)) {
				$this->connected = true;
			}
		}
	}

	public function query($query) {
		return mysql_query($query);
	}

	public function getConnected($connected) {
		return $this->connected;
	}
}