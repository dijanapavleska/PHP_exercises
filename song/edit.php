<?php
require_once 'DBBlackbox.php';
require_once 'Song.php';
$id = $_GET['id'];

// somehow retrieve existing song from some storage
$song = find($id, 'Song');
var_dump($song);

session_start();
// if there is a success message in the session...

if (isset($_SESSION['success_message'])) {

    //retrieve it from session into a variable
    $success_message = $_SESSION['success_message'];

    // delete it from session so it's not there anymore (flashing)
    unset($_SESSION['success_message']);
}
// find the id of the record we want to edit



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit php</title>
    <style>
        .success-message {
            border: 1px solid;
            padding: 1em;
            background-color: green;
        }
    </style>
</head>

<body>

    <?php if (!empty($success_message)) : ?>
        <div class="success-message">
            <?= $success_message ?>
        </div>
    <?php endif; ?>

    <form action="update.php?id=<?= $id ?>" method="post">
        <!-- display the form prefilled with entity data -->
        Name:<br>
        <input type="text" name="name" value="<?= htmlspecialchars((string)$song->name) ?>"><br>
        <br>
        Author:<br>
        <input type="text" name="author" value="<?= htmlspecialchars((string)$song->author) ?>"><br>$song->author) ?>"><br>
        <br>
        Length:<br>
        <input type="number" name="length" value="<?= htmlspecialchars((string)$song->length) ?>"> seconds<br>
        <br>
        Album:<br>
        <input type="text" name="album" value="<?= htmlspecialchars((string)$song->album) ?>"><br>
        <br>
        <button type="submit">Save</button>
    </form>
</body>

</html>