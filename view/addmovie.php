<!-- Juste un petit test -->
<p>Gestion du film: mov_title</p>
<hr>
<?php if (!empty($errorList)) : ?>
	<div class="alert alert-danger" role="alert">
		<?php foreach ($errorList as $currentErrorText) : ?>
			<?= $currentErrorText ?><br>
		<?php endforeach; ?>
	</div>
<?php endif; ?>
<form action="" method="post">
	<div class="row">
  		<div class="col-sm-3 col-sm-6 col-xs-12">

			<div class="form-group">
				<label>Nom du film</label>
				<input type="text" class="form-control" name="mov_title" value="<?= $movieInfos['mov_title'] ?>" placeholder="Nom du film" />
			</div>
			
			<div class="form-group">
				<label>Date de sortie</label>
				<input type="text" class="form-control" name="mov_year" value="<?= $movieInfos['mov_year'] ?>" placeholder="Date de sortie" />
			</div>

			<div class="form-group">
				<label>Catégorie</label>
				<input type="text" class="form-control" name="cat_id" value="<?= $movieInfos['cat_id'] ?>" placeholder="Catégorie" />
			</div>

			<div class="form-group">
				<label>Acteurs/Actrices</label>
				<input type="text" class="form-control" name="mov_actors" value="<?= $movieInfos['mov_actors'] ?>" placeholder="Acteurs/Actrices" />
			</div>

			<div class="form-group">
				<label>Déscription du film</label>
				<textarea type="text" class="form-control" name="mov_info" value="<?= $movieInfos['mov_info'] ?>" placeholder="Déscription du film" cols="30" rows="3"></textarea>
			</div>

			<div class="form-group">
				<label>Chemin du fichier</label>
				<input type="text" class="form-control" name="mov_path" value="<?= $movieInfos['mov_path'] ?>" placeholder="Chemin du fichier" />
			</div>

			<div class="form-group">
				<label>Support du fichier</label>
				<input type="text" class="form-control" name="sup_id" value="<?= $movieInfos['sup_id'] ?>" placeholder="Support du fichier" />
			</div>
			<div class="form-group">
				<label>Affiche du film</label>
				<input type="text" class="form-control" name="mov_poster" value="<?= $movieInfos['mov_poster'] ?>" placeholder="Affiche du film" />
			</div>
		</div>
	</div>
	<input type="submit" class="btn btn-success" value="Modifier" />
	<input type="submit" class="btn btn-success" value="Ajouter" />
</form>