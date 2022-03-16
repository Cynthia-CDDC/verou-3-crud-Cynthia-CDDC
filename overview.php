<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

<h1>Goodcard - track your collection of Books cards</h1>

<ul>
    <?php foreach ($cards as $card) : ?>
        <li><?= $card['title'] ?></li>
        <li><?= $card['author'] ?></li>
        <li><?= $card['synopsis'] ?></li>
        <a href="index.php?action=edit&id=<?= $card['id'] ?>">Edit</a>
    <?php endforeach; ?>
</ul>

<form method="GET">
    <label for="title">Title</label>
    <input type="text" id="title" name="title">
    <label for="author">Author</label>
    <input type="text" id="author" name="author">
    <label for="synopsis">synopsis</label>
    <input type="text" id="synopsis" name="synopsis">
    <input type="submit" name="action" value="create">
</form>
<?php var_dump($_GET); ?>
</body>
</html>