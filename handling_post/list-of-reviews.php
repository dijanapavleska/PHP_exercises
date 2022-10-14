<?php
// display a list of all the reviews that we have in our fake database

// require DBBlackbox and its functions to be able to access the fake db

require_once 'DBBlackbox.php';



// all of complex PHP here:
$reviews = select();

// var_dump($reviews);



// any displaying of HTML after:
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of reviews</title>
    <style>
        th,
        td {
            border: 1px solid gray
        }
    </style>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Movie name</th>
                <th>Review text</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reviews as $review) : ?>
                <tr>
                    <td><a href="edit-form.php?review_id=<?= $review['id'] ?>"> <?= $review['id'] ?></a></td>
                    <td><?= $review['movie_title'] ?></td>
                    <td><?= $review['review_text'] ?></td>
                    <td><?= $review['rating'] ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>