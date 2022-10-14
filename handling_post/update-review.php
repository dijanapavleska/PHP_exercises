<?php

// take the incoming POST data and save a new review into the database
//and INSERT a new review into the database

//require DBBlackbox and its functions to be able to work with the fake database

require_once 'DBBlackbox.php';

if ($_POST) {
    // if &_POST is not empty
    // make sure that opening this script with GET does not do anything

    //get the id of the url edited
    $review_id = $_GET['review_id'];

    //insert a new record in the database
    update($review_id, $_POST);
}
