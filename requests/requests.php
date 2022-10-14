<!-- DISPLAYS THE FORM -->
<?php
$title = 'Request handling';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
</head>

<body>
    <h1>Request handling</h1>

    <!-- action="" means submitting to the current url -->

    <!-- http://www.cbp-exercises.test/Week_5/PHP_introduction/requests/requests.php
    http://www.cbp-exercises.test/Week_5/PHP_introduction/requests/handle-form.php -->

    <form action="handle-form.php?foo=bar&name=Jan&year=2022" method="post">
        <input type="text" name="my_input" value="Hello, world!">
        <br>
        <button>Submit form</button>
    </form>

    <form action="handle-form.php?foo=bar&name=Jan&year=2022" method="get">
        <input type="text" name="user_id" value="">
        <label for="">
            Detailed:
            <input type="checkbox" name="detailed">
        </label>
        <br>
        <button>Submit form</button>
    </form>

</body>

</html>