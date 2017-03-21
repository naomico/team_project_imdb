<?php

// this function will allow us to select all the available movie information in the database
function getMovieInfos($id) {
    global $pdo;

    $getMovieInfos = '
        SELECT `mov_id`, `mov_title`, `mov_year`, `mov_path`, `mov_info`, `mov_support`, `mov_inserted`, `mov_actors`, `categories_cat_id`, `support_sup_id`, `mov_poster`,`cat_title`, `sup_name`
        FROM movie
        INNER JOIN categories ON categories.cat_id = movie.categories_cat_id
        INNER JOIN support ON support.sup_id = movie.support_sup_id
        WHERE mov_id = :movieId
    ';
    $sth = $pdo->prepare($getMovieInfos);
    $sth->bindValue(':movieId', $id,  PDO::PARAM_INT);

    if ($sth->execute() === false) {
        print_r($pdo->errorInfo());
    }
    else {
        $movieInfos = $sth->fetch(PDO::FETCH_ASSOC);

        return $movieInfos;
    }
}
// function selectMovieInfo end

function filterStringInputPost($name, $defaultValue='') {
    $getValue = filter_input(INPUT_POST, $name);
    if ($getValue !== false) {
        return trim(strip_tags($getValue));
    }
    return $defaultValue;
}
function filterIntInputPost($name, $defaultValue=0) {
    $getValue = filter_input(INPUT_POST, $name);
    if ($getValue !== false) {
        return intval(trim($getValue));
    }
    return $defaultValue;
}

function addMovie($movieTitle,$movieReleaseYear,$categoryId,$casting,$synopsis,$filePath,$supportId,$moviePoster) {
    global $pdo;

    $sql = '
        INSERT INTO `movie`(`mov_title`,`mov_year`, `categories_cat_id`,`mov_actors`, `mov_info`, `mov_path`,`support_sup_id`,`mov_poster`)
        VALUES (:movieTitle, :movieReleaseYear, :cat_id, :casting, :synopsis, :filePath, :sup_id, :moviePoster)
    ';
    $sth = $pdo->prepare($sql);
    $sth->bindValue(':movieTitle', $movieTitle);
    $sth->bindValue(':movieReleaseYear', $movieReleaseYear, PDO::PARAM_INT);
    $sth->bindValue(':cat_id', $categoryId, PDO::PARAM_INT);
    $sth->bindValue(':casting', $casting);
    $sth->bindValue(':synopsis', $synopsis);
    $sth->bindValue(':filePath', $filePath);
    $sth->bindValue(':sup_id', $supportId, PDO::PARAM_INT);
    $sth->bindValue(':moviePoster', $moviePoster);

    if ($sth->execute() === false) {
        print_r($sth->errorInfo());
    }
    else {
        // Je récupère l'ID auto-incrémenté
        return $pdo->lastInsertId();
    }

    return false;
}
/*
function updateStudent($id,$lastname,$firstname,$email,$birthdate,$friendliness,$sessionId,$cityId) {
    global $pdo;

    $sql = '
        UPDATE student
        SET stu_lastname = :lastname,
        stu_firstname = :firstname,
        stu_email = :email,
        stu_birthdate = :birthdate,
        stu_friendliness = :friendliness,
        session_ses_id = :ses_id,
        city_cit_id = :cit_id
        WHERE stu_id = :id
    ';
    $sth = $pdo->prepare($sql);
    $sth->bindValue(':id', $id);
    $sth->bindValue(':lastname', $lastname);
    $sth->bindValue(':firstname', $firstname);
    $sth->bindValue(':email', $email);
    $sth->bindValue(':birthdate', $birthdate);
    $sth->bindValue(':friendliness', $friendliness, PDO::PARAM_INT);
    $sth->bindValue(':ses_id', $sessionId, PDO::PARAM_INT);
    $sth->bindValue(':cit_id', $cityId, PDO::PARAM_INT);

    if ($sth->execute() === false) {
        print_r($sth->errorInfo());
    }
    else {
        return true;
    }

    return false;
}
*/