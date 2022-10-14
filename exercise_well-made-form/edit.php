<?php
require_once 'DBBlackbox.php';
require_once 'album-form.php';


session_start();

// flashed messages
$messages = [];

// The isset() function is an inbuilt function in PHP that is used to determine if the variable is declared and its value is not equal to NULL

if (isset($_SESSION['success_message'])) {
    $message = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}

$id = $_GET['id'] ?? null;

if ($id) {

    // somehow retrieve existing data from some storage
    $album = find($id, 'Album');
} else {

    // prepare empty data
    $album = new Album;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit album</title>
    <style>
        .success-message {
            border: 1px solid;
            padding: 1em;
            background-color: green;
        }
    </style>
</head>

<body>

    <nav>
        <a href="list.php">View List</a>
    </nav>

    <?php if (!empty($message)) : ?>
        <div class="success-message"><?= $message ?></div>
    <?php endif; ?>

    <?php if ($id) : ?>
        <form action="save.php?id=<?= $id ?>" method="post">
        <?php else : ?>
            <form action="save.php" method="post">
            <?php endif; ?>
            <!-- display the form prefilled with entity data -->
            Name:<br>
            <input type="text" name="name" value="<?= htmlspecialchars((string)$album->name) ?>"><br>
            <br>
            Author:<br>
            <input type="text" name="author" value="<?= htmlspecialchars((string)$album->author) ?>"><br>
            <br>
            Release Year:<br>
            <input type="number" name="year" value="<?= htmlspecialchars((string)$album->year) ?>"><br>
            <br>
            <button type="submit">Save</button>
            </form>

</body>

</html>