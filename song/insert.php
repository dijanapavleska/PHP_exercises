<?php
require_once 'DBBlackbox.php';
require_once 'Song.php';
session_start();

// validation
// check if the incoming data is valid

//declare that everything is ok
$valid = true;

if (empty($_POST['name'])) {
    // validation failed
    $valid = false;
}
if (empty($_POST['length']) && !is_numeric($_POST['length'])) {
    // length is not a number
    $valid = false;
}

// if validation failed
if ($valid === false) {

    $_SESSION['error_message'] = 'Something went wrong';
    // redirect the user to start over
    header('Location: create.php');
    //end execution here, equivalent of return in a function
    exit();
}


// prepare a new (empty) entity
$song = new Song;
// var_dump($_POST);

// fill the entity with request data
// value from $_POST            original value
$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;

//insert into storage and get ID
// find ID in the data.json to generate it in the browser
$id = insert($song);

// flash the success message
// $_SESSION['success_message'] = 'Song saved successfully.';
Session::instance()->set('success message', 'Song saved successfully');

header('Location: edit.php?id=' . $id);
