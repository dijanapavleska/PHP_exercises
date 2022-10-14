<?php

require_once 'lib/DBBlackbox.php';
require_once 'class_comment.php';

session_start();
$messages = [];

$comments = select();

// your code here
if (!isset($_POST['name']) || !isset($_POST['comment'])) {
    $messages = $_SESSION['fail_message'];
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disney buys Star Wars maker Lucasfilm from George Lucas | BBC News</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php foreach ($messages as $message) : ?>
        <div class="message"><?= $message ?></div>
    <?php endforeach; ?>


    <article>

        <div class="img">
            <img src="img/article.jpg" alt="Disney buys Star Wars maker Lucasfilm from George Lucas">
        </div>

        <h1>Disney buys Star Wars maker Lucasfilm from George Lucas</h1>

        <p class="story">Disney is buying Lucasfilm, the company behind the Star Wars films, from its chairman and founder George Lucas for $4.05bn (£2.5bn).</p>

        <p>Mr Lucas said: "It's now time for me to pass Star Wars on to a new generation of film-makers."</p>

        <p>In a statement announcing the purchase, Disney said it planned to release a new Star Wars film, episode seven, in 2015.</p>

        <p>That will be followed by episodes eight and nine and then one new movie every two or three years, the company said.</p>

    </article>

    <div class="comments">
        <h2>Comment below:</h2>

        <!-- your code here -->
        <form action="handle-form.php" method="post">
            <?php

            ?>
            <!-- display the form prefilled with entity data -->
            Name:<br>
            <input type="text" name="name" value=""><br>
            <br>
            Leave a comment:<br>
            <textarea id="comment_section" name="comment" rows="4" cols="50"></textarea><br>
            <br>

            <button type="submit">Submit comment</button>
        </form>

        <tr>
            <?php foreach ($comments as $comment) : ?>
                <div class="comment">
                    <h4><?= $comment['name'] ?></h4>
                    <p><?= $comment['comment'] ?></p>
                </div>
            <?php endforeach ?>

        </tr>

    </div>

</body>

</html>