<?php
require_once 'DBBlackbox.php';
require_once 'album-form.php';
require_once 'edit.php';

// start the session
session_start();

// find the ID of the record we want to edit in the request
// OR NOT - we are creating a new record
$id = $_GET['id'] ?? null;

// somehow we must determine whether this is creating a new record
// or updating an existing one. The presence of `id=` in the URL
// is a good indicator
if ($id) {

    // somehow retrieve existing data from some storage
    $album = find($id, 'Album');
} else {

    // prepare empty data
    $album = new Album;
}

// update data from request
$album->name = $_POST['name'] ?? $album->name;
$album->author = $_POST['author'] ?? $album->author;
$album->year = $_POST['year'] ?? $album->year;

if ($id) {
    update($id, $album);
} else {
    $id = insert($album);
}



// flash a success message
$_SESSION['success_message'] = 'Data was successfully saved!';

// redirect to edit
header('Location: edit.php?id=' . $id);
