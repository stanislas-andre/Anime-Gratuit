<?php

require_once 'Episode.class.php';

class Anime {

	private $id;				// String
	private $title;				// String
	private $year;				// String
	private $author;			// String
	private $synopsis;			// String
	private $photoName;			// String
	private $type;				// String
	private $epHttpList;		// List of Episode
	private $epTorrentList;		// List of Episode

	public function __construct($id, $title, $year, $author, $synopsis, $photoName, $type) {
		$this->id = $id;
		$this->title = $title;
		$this->year = $year;
		$this->author = $author;
		$this->synopsis = $synopsis;
		$this->photoName = $photoName;
		$this->type = $type;
	}

	/**
	* Save the current Article object from the database (tested and works)
	*/
	public function save() {
		require 'conf/config.conf.php';
		$sqlStore = new SqlStore($conf['server'], $conf['login'], $conf['password'], $conf['database']);
		if ($sqlStore->getConnected()) {
			$sqlStore->query('INSERT INTO anime VALUES("' . $this->id . '", "' . $this->title .'", "' . $this->year . '", "' . $this->author . '", 
			"' . $this->synopsis . '", "' .$this->photoName . '", "' . $this->type . '")');
		}
	}

	/**
	* Create a new episode Add an episode from the List
	* @param String $number
	* @param String $link
	* @param String $name
	*/
	public function addEpisode($number, $link, $name = null) {
		$episode = new Episode($number, $link, $name);
	}

	/* --- Getters and setters --- */

	public function getId() {
		return $this->id;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getYear() {
		return $this->year;
	}

	public function getAuthor() {
		return $this->author;
	}

	public function getSynopsis() {
		return $this->synopsis;
	}

	public function getPhotoName() {
		return $this->photoName;
	}

	public function getType() {
		return $this->type;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function setYear($year) {
		$this->year = $year;
	}

	public function setAuthor($author) {
		$this->author = $author;
	}

	public function setSynopsis($synopsis) {
		$this->synopsis = $synopsis;
	}

	public function setPhotoName($photoName) {
		$this->photoName = $photoName;
	}

	public function setType($type) {
		$this->type = $type;
	}

}