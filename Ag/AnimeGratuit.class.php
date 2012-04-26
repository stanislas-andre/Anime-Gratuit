<?php

require_once 'News.class.php';
require_once 'AnimesManager.class.php';

class AnimeGratuit {

	private $news;		// Array of News Object
	private $animeManager;	// AnimeManager Object

	public function __construct() {
		$this->animeManager = new AnimesManager();
		$query = $this->animeManager->getSqlStore()->query('SELECT * FROM news ORDER BY date');
		while ($result = mysql_fetch_array($query)) {
			$this->news[] = new News($result['title'], $result['author'], $result['content'], $result['photo'], $result['date']);
		}
	}

	/**
	* Return HTML fragment of all news
	* @return String result
	*/
	public function renderNews() {
		$result = '';
		foreach ($this->news as $news) {
			$result .= $news->renderHTML();
		}
		return $result;
	}

	/* --- Getters and setters --- */
	public function getNews() {
		return $this->news;
	}
}