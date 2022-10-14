<?php
require_once 'DBBlackbox.php';
$albums = select();
// var_dump($albums);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widli=device-widli, initial-scale=1.0">
    <title>List of Albums</title>
</head>

<body>
    <header>
        <nav>
            <a href="edit.php">Edit form</a>
        </nav>
    </header>
    <?php foreach ($albums as $album) : ?>
        <h2>Album <?= $album['id'] ?></h2>
        <ul>
            <li><?= $album['name'] ?></li>
            <li><?= $album['author'] ?></li>
            <li><?= $album['year'] ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>