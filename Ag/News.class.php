<?php
class News {
	
	private $author;
	private $content;
	private $date;
	private $title;
	private $photo;

	public function __construct($title, $author, $content, $photo, $date = null) {
		$this->author = $author;
		$this->content = $content;
		$this->title = $title;
		$this->photo = $photo;
		if ($date == null) {
			$this->date = date('Ymd');
		} else {
			$this->date = $date;
		}
	}

	/**
	* Return the HTML fragment of this news
	* @return String news
	*/
	public function renderHTML() {
		return '<div class="article">
					<div class="titre">' . $this->title . ' - Posted by ' . $this->author . ' le ' . $this->renderFrenchDate() . '</div>
					<div class="contenu">
						<div class="image-contenu">
							<img src="images/news/' . $this->photo . '" alt="' . $this->title . '" width="220" height="165" />
						</div>
						<div class="info-contenu" align="justify">
							' . $this->content . '
						</div>
					</div>
				</div>';
	}

	/**
	* Return the french date
	* @return String date
	*/
	public function renderFrenchDate() {
		$year = substr($this->date, 0, 4);
		$month = substr($this->date, 4, 2); 
		$day = substr($this->date, 6, 2);
		$result = $day . '/' . $month . '/' . $year;
		return $result;
	}

	/* --- Getters and setters --- */
	public function getTitle() {
		return $this->title;
	}

}