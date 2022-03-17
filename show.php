THIS IS THE SHOW PAGE
<br>
<br>
<ul>
    <?php foreach ($books as $book) : ?>
        <li><?=$book['id']?></li>
        <li><?=$book['title']?></li>
        <li><?=$book['author']?></li>
        <li><?=$book['synopsis']?></li>
    <?php endforeach; ?>
</ul>
<br>
<a href="index.php">HOME</a>