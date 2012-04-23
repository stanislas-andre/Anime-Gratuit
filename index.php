<?php include 'includes/header.inc.php'; ?>

<div id="content">

<?php require 'Ag/AnimeGratuit.class.php';
$ag = new AnimeGratuit();
echo $ag->renderNews();

include 'includes/footer.inc.php'; ?>