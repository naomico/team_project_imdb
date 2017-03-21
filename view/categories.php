<main>
    <div id="flexboxCat">
        <div id="posterCat">

            

            <div id="movieInfoCat">

                <input type="search" placeholder="Recherche"><input type="submit" value="Ok">
                <div id="movieByCategory"> 
                    <?php foreach ($nb as $row) : ?>
                        <div class="col-lg-4" id="moviePreviewList">
                            <img src="<?= $row['mov_poster']?>">
                            <a href=""><?= $row['mov_title'] ?></a>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div id="buttonsCat">
                <button type="button" name="details" id="details"><a href="#">Details</a></button>
                <button type="button" name="edit" id="edit"><a href="#">Edit</a></button>
            </div>
        </div>
    </div>
</main>
