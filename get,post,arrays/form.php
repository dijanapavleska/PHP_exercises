<p>Here is the form</p>

<form action="" method="POST">

    <!-- loop through the array $items and make each key available as variable $i and each value as variable $text. -->
    <?php foreach ($items as $i => $text) : ?>
        <input type='text' value=<?= htmlspecialchars($text) ?> name='items[<?= $i ?>]'>;
    <?php endforeach; ?>

    <input type="text" value="" name="items[<?= count($items) ?>]">

    <button type="submit">Add</button>

</form>