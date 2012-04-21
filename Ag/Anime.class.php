<?php
class Anime {
	private $id;				// String
	private $title;				// String
	private $year;				// String
	private $author;			// String
	private $synopsis;			// String
	private $photoName;			// String
	private $type;				// String
	private $epHttpList;		// List of HttpEpisode
	private $epTorrentList;		// List of TorrentEpisode

	public function __construct($title, $year, $author, $synopsis, $photoName, $type) {
		$this->id = uniqid();
		$this->title = $title;
		$this->year = $year;
		$this->author = $author;
		$this->synopsis = $synopsis;
		$this->photoName = $photoName;
		$this->type = $type;
	}

	public function save() {
		// TODO: voir le système de persistence des données.
	}

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