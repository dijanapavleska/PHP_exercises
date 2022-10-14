<?php
// HANDLE THE FORM

var_dump($_GET);

// get information from &_GET and...
// apply filters to what we see ?email_ends_with=gmail.com
// change ordering of the data that we see   ?orderby=name&way=desc
// perform search on a website ?search=john
// display specific bit of data ?user_id=4

var_dump($_POST);

// get information from &_POST and...
// save data into the server (into DB)
// update data in the database
// perform sensitive operation (delete, login)

//is there an element with key 'name' in POST data?
//?name=0
//name === ''
//user.name JS
//$user->name PHP

// $user = new User;

if (isset($_POST['name'])) {
    // setting the value of the property name of the user object
    $user->name = $_POST['name'];
}
if (!empty($_POST['name'])) {
    // setting the value of the property name of the user object
    $user->name = $_POST['name'];
}
