<?php

// retrieve songs from the database

require_once 'DBBlackbox.php';
require_once 'Song.php';

// start the session
session_start();

var_dump($_SESSION);

unset($_SESSION['name']);



// no-limit skip 0 return objects of class Song
$songs = select(null, 0, 'Song');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- display a list of songs -->

    <a href="create.php">ADD A NEW SONG</a>

    <ul>
        <?php foreach ($songs as $song) : ?>

            <li>
                <?= $song->name ?>
                by <?= $song->author ?>

                <a href="edit.php?id=<?= $song->id ?>">EDIT</a>
            </li>

        <?php endforeach; ?>
    </ul>

</body>

</html>