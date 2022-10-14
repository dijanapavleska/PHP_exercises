<?php
$my_name = "Pepik";
?>

<h1>Inline PHP</h1>

<h3>My name is <?= $my_name ?>.<h3>
        <?php
        if ($my_name == "Ondra") {
            echo "<h3>My name is {$my_name} </h3>";
        } else {
            echo "<h3>You're lying.</h3>";
        }

        ?>
        <?php if ($my_name == "Ondra") : ?>
            <h3>Hello <?= $my_name ?> </h3>
            <h2>blabla</h2>
            else : ?>
            <h3> You're lying.</h3>
        <?php endif; ?>
        <?php foreach ()
