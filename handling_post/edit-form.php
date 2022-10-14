<?php
// display a form to edit an existing movie review record

//use the find() function od the DBBlackbox
require_once 'DBBlackbox.php';

//get stored information about a specific review
$review_id = $_GET['review_id'];

$review = find($review_id);

// var_dump(@$review);
// use that info to pre-fill the form


?>
<!-- display a form -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit a movie review</title>
</head>

<body>

    <form action="update_review.php?review_id=<?= $review['id'] ?>" method="post">
        Movie title:<br>
        <input type="text" name="movie_title" value="<?= $review['movie_title'] ?>"> <br>
        <br>

        Review text:<br>
        <textarea name="review_text" cols="30" rows="10" value="<?= $review["review_text"] ?>"> </textarea> <br>
        <br>

        Rating:<br>
        <input type="range" name="rating" min="0" max="10"> <br>
        <br>
        <button>Submit the review</button>
    </form>

</body>

</html>