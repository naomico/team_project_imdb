<main>
    <div id="flexbox">
        <div id="imageSection">
            <img id="poster" src="<?= $movieInfos['mov_poster'] ?>" alt="">
            <p id="releaseYear">Released: <?= $movieInfos['mov_year'] ?></p>
            <p id="support">Support: <?= $movieInfos['sup_name'] ?></p>
        </div>

        <div id="movieInfo">
            <h2><?= $movieInfos['mov_title'] ?></h2>
            <h3><?= $movieInfos['cat_title'] ?></h3>
            <p id="synopsis"><?= $movieInfos['mov_info'] ?></p>
            <p id="actors">Actors: <?= $movieInfos['mov_actors'] ?></p>
            <p id="path">Path: <?= $movieInfos['mov_path'] ?></p>
        </div>
    </div>
</main>
