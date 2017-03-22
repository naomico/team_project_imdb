
    <div id="flexboxCat">
        <div id="posterCat">
           <?php foreach ($nb as $row): ?>
            <!--<div class="col-md-2" id="moviePreviewList">-->
            <ul id="ulCat" class="dlist-inline list-unstyled text-center">
                <li id="liCat"><a id='aCat' href=""><?= $row['cat_title'].' '.'('.$row['nb'].')'?></a></li>
            </ul>
        <?php endforeach; ?>
    </div>
</div>


