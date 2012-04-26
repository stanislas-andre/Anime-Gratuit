<?php
require 'Ag/News.class.php';
$news = new News('titi','toto','tata', 'under-construction.png');
echo $news->renderHTML();