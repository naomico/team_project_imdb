<?php
// access to config file
require dirname(dirname(__FILE__)).'/inc/config.php';

// Je récupère les données de la database dont j'ai besoin pour ma première requête concernant les catégories



// Je récupère les données de la database dont j'ai besoin pour ma deuxième requête concernant les aperçus des films
$sql = '
	SELECT mov_title, mov_poster
	FROM movie
';

$sth = $pdo->query($sql);
if ($sth === false) {
	print_r($sth->errorInfo());
}
else {
	$moviePreviewList = $sth->fetchAll(PDO::FETCH_ASSOC);
}

//=====================================
// FILE INCLUSION
//=====================================
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/home.php';
include dirname(dirname(__FILE__)).'/view/footer.php';
