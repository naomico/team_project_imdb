<?php

// access to config file
require dirname(dirname(__FILE__)).'/inc/config.php';

// Je récupère les données de la database dont j'ai besoin pour ma première requête concernant les catégories
$sql = '
SELECT COUNT( * ) AS nb, mov_title, mov_poster
FROM movie
INNER JOIN categories ON categories.cat_id = movie.categories_cat_id
WHERE cat_id =1
GROUP BY mov_title, mov_poster

';

$sth = $pdo->query($sql);
if ($sth === false) {
	print_r($sth->errorInfo());
}
else {
	$nb = $sth->fetchAll(PDO::FETCH_ASSOC);
}

//=====================================
// FILE INCLUSION
//=====================================
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/categories.php';
include dirname(dirname(__FILE__)).'/view/footer.php';
