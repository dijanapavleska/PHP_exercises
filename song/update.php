<?php
require_once 'DBBlackbox.php';
require_once 'Song.php';
session_start();
// find the id of the record we want to edit

$id = $_GET['id'];

// somehow retrieve existing song from some storage
$song = find($id, 'song');

$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;

update($id, $song);
// flash success message 
$_SESSION['success_message'] = "song saved successfully";
// redirect: heads back to index.php instead of editing and going to a blank page
header('Location: edit.php?id=' . $id);
