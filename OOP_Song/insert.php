<?php
require_once 'DBBlackbox.php';
require_once 'Song.php';



// validation
// i.e. "check if the incoming data is valid"

// declare that everthing is ok
$valid = true;
$errors = [];

if (empty($_POST['name'])) {
    // validation failed
    $valid = false;
    $errors['name'] = 'The name cannot be left empty';
}

if (!empty($_POST['length']) && !is_numeric($_POST['length'])) {
    // length is not a number
    $valid = false;
    $errors['length'] = 'Length must be a number';
}

// if validation failed
if ($valid === false) {

    $_SESSION['error_messages'] = $errors;
    $_SESSION['old_data'] = $_POST;

    header('Location: create.php');

    // end execution here
    exit();
}

// prepare a new (empty) entity
$song = new Song;

// fill the entity with request data
//           value from $_POST      original value
$song->name =  $_POST['name']   ??   $song->author;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;
// insert into storage and get ID
$id = insert($song);

var_dump($id);
// flash the success message
Session::instance()->set('success_message', 'Song saved succesfully.');

header('Location: edit.php?id=' . $id);
