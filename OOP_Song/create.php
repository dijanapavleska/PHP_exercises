<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';
require_once 'Session.php';

Session::instance();

var_dump($_SESSION);

// if there is error message in the session ...
if (isset($_SESSION['error_messages'])) {

    // retrieve it from session into a variable
    $error_messages = $_SESSION['error_messages'];

    // delete it from the session so that it is not there
    // next time. That is called FLASHING.
    unset($_SESSION['error_messages']);
}

if (isset($_SESSION['old_data'])) {

    // retrieve it from session into a variable
    $old_data = $_SESSION['old_data'];

    // delete it from the session so that it is not there
    // next time. That is called FLASHING.
    unset($_SESSION['old_data']);
}

// prepare a new (empty) entity
$song = new Song;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a song</title>

    <style>
        .error-message {
            background-color: pink;
            border: 1px solid red;
            padding: 1em;
        }

        input.with-errors {
            border-color: red;
        }
    </style>
</head>

<body>

    <?php if (!empty($error_messages)) : ?>

        <?php foreach ($error_messages as $error_message) : ?>

            <div class="error-message">
                <?= $error_message ?>
            </div>

        <?php endforeach; ?>

    <?php endif; ?>

    <form action="insert.php" method="post">

        <!-- display the form prefilled with entity data -->

        Name:<br>
        <!-- <input type="text" name="name" value="<?= htmlspecialchars((string)$song->name) ?>"><br> -->
        <input type="text" name="name" value="<?= htmlspecialchars($old_data['name'] ?? (string)$song->name) ?>"><br>
        <br>

        Author:<br>
        <input type="text" name="author" value="<?= htmlspecialchars((string)$song->author) ?>"><br>
        <br>

        Length:<br>
        <!-- <input type="number" name="length" value="<?= htmlspecialchars((string)$song->length) ?>"> seconds<br> -->
        <input type="text" name="length" value="<?= htmlspecialchars($old_data['length'] ?? (string)$song->length) ?>">
        seconds<br>
        <br>

        Album:<br>
        <input type="text" name="album" value="<?= htmlspecialchars((string)$song->album) ?>"><br>
        <br>
        <button type="submit">Save</button>
    </form>
</body>

</html>