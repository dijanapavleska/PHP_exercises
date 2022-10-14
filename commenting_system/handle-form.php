<?php

require_once 'lib/DBBlackbox.php';
require_once 'class_comment.php';

// start the session
session_start();


//we Create new Comment object and assinge it to variable $new_comment
//so we can work later on with that variable
$new_comment = new Comment;



//     header("Location: index.php");
//     exit();
// } else {
//     insert($new_comment);
// }
// var_dump($_SESSION);


// update data from request
$new_comment->name = $_POST['name'];
$new_comment->comment = $_POST['comment'];

insert($new_comment);




// flash a success message
$_SESSION['fail_message'] = 'Fill out all of the required fields!';
// redirect to index
header('Location: index.php');
