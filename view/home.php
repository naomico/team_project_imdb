<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<p class="text-center">Eodem tempore etiam Hymetii praeclarae indolis viri negotium est actitatum, cuius hunc novimus esse textum. cum Africam pro consule regeret Carthaginiensibus victus inopia iam lassatis, ex horreis Romano populo destinatis frumentum dedit, pauloque postea cum provenisset segetum copia, integre sine ulla restituit mora.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
		    <div class="input-group">
		      <input type="text" class="form-control" placeholder="Rechercher">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="button">OK</button>
		      </span>
		    </div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<ul class="list-inline list-unstyled text-center">
				<!-- Il va falloir mettre un foreach/des foreach plus tard pour les catégories et les films à afficher -->
				<li><a href="">Science-Fiction ()</a></li>
				<li><a href="">Comédie ()</a></li>
				<li><a href="">Aventure ()</a></li>
				<li><a href="">Thriller ()</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<!-- Début de mon foreach = pour chaque élément stocké dans la variable $moviePreviewList j'appliquerai le code -->
			<?php foreach ($moviePreviewList as $row) : ?>
				<div class="col-lg-4" id="moviePreviewList">
					<img src="<?= $row['mov_poster']?>">
					<a href=""><?= $row['mov_title'] ?></a>

				</div>
			<?php endforeach; ?>
			<!-- fin de mon foreach -->
		</div>
	</div>
</div>