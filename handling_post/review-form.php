<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit a movie review</title>
</head>

<body>
    <form action="save_review.php" method="post">

        Movie title:<br>
        <input type="text" name="movie_title"> <br>
        <br>

        Review text:<br>
        <textarea name="review_text" cols="30" rows="10"></textarea> <br>
        <br>

        Rating:<br>
        <input type="range" name="rating" min="0" max="10"> <br>
        <br>
        <button>Submit the review</button>
    </form>

</body>

</html>