<?php
class Episode {

	private $number;
	private $name;
	private $link;

	public function __construct($number, $link, $name = null) {
		$this->number = $number;
		$this->link = $link;
		$this->name = $name;
	}

	/* --- Getters and Setters --- */

	public function get() {
		return $this;
	}

	public function getNumber() {
		return $this->number;
	}

	public function getName() {
		return $this->name;
	}


	public function getLink() {
		return $this->link;
	}


	public function setEpisode($episode) {
		$this->episode = $episode;
	}


	public function setName($name) {
		$this->name = $name;
	}


	public function setLink($link) {
		$this->link = $link;
	}

}