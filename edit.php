THIS IS THE UPDATE PAGE
<br>
<br>
Fill in the changes you want to:
<form method="POST">
    <label for="title">Title</label>
    <input type="text" id="title" name="title" value="<?=$_GET['title']?>">
    <label for="author">Author</label>
    <input type="text" id="author" name="author" value="<?=$_GET['author']?>">
    <label for="synopsis">synopsis</label>
    <input type="text" id="synopsis" name="synopsis" value="<?=$_GET['synopsis']?>">
    <input type="submit" name="updateform">
</form>
<a href="index.php">HOME</a>