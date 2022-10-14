<?php
require_once 'DBBlackbox.php';
require_once 'Song.php';

session_start();

// find the ID of the record we want to edit in the request
$id = $_GET['id'];

// somehow retrieve existing song from some storage
$song = find($id, 'Song');
// fill the entity with request data
//           value from $_POST      original value
$song->name =  $_POST['name']   ??   $song->author;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;
// update the song in the database
update($id, $song);

// flash the success message
$_SESSION['success_message'] = 'Song saved succesfully.';

header('Location: edit.php?id=' . $id);
