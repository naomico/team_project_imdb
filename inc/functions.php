<?php

// this function will allow us to select all the available movie information in the database
function selectMovieInfo() {
    $movieInfoSelect = '
        SELECT *
        FROM movie
        INNER JOIN categories ON categories.cat_id = movie.categories_cat_id
        INNER JOIN support ON support.sup_id = movie.support_cat_id
    ';

    $request = $pdo->query($movieInfoSelect);

    if ( $request->execute() === false ) {
        print_r( $pdo->errorInfo() );
    } else {
        $movieInfo = $request->fetch(PDO::FETCH_ASSOC);
    }

} // function selectMovieInfo end
