<?php
$page_title = 'Shopping list';
$page = 'home';
$items = [];

if (isset($_GET['page'])) {  // if there is 'page' in the GET parameters
    $page = $_GET['page'];   // set the value of $page to the value of the parameter
} else {                     // otherwise
    $page = null;            // set the value of $page to null (some default value)

}
if (!empty($_POST['items'])) {
    $items = $_POST['items'];
    var_dump($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $page_title ?></h1>
    <?php if ($page == 'home') :
        include "home.php" ?>
    <?php endif; ?>

    <?php if ($page == 'form') :
        include "form.php" ?>
    <?php endif; ?>

    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=form">Form</a>
    </nav>

</body>

</html>