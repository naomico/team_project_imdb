<p>Eodem tempore etiam Hymetii praeclarae indolis viri negotium est actitatum, cuius hunc novimus esse textum. cum Africam pro consule regeret Carthaginiensibus victus inopia iam lassatis, ex horreis Romano populo destinatis frumentum dedit, pauloque postea cum provenisset segetum copia, integre sine ulla restituit mora.
</p>
<input type="search" placeholder="Recherche"><input type="submit" value="Ok">
<ul>
	<!-- Il va falloir mettre un foreach/des foreach plus tard pour les catégories et les films à afficher -->
	<li><a href="">Science-Fiction ()</a></li>
	<li><a href="">Comédie ()</a></li>
	<li><a href="">Aventure ()</a></li>
	<li><a href="">Thriller ()</a></li>
</ul>
<div>
	<!-- Début de mon foreach = pour chaque élément stocké dans la variable $moviePreviewList j'appliquerai le code -->
	<?php foreach ($moviePreviewList as $row) : ?>
	<div>
		<img src="<?= $row['mov_poster']?>">
		<a href=""><?= $row['mov_title']</a>
	</div>
	<?php endforeach; ?>
	<!-- fin de mon foreach -->
</div>