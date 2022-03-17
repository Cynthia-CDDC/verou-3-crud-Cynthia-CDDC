THIS IS THE DELETE PAGE
<br>
<br>
Do you want to delete this book? 
    <form method="POST">
    <label for="id">ID</label>
    <input type="text" id="id" name="id" value=<?=$_GET['id']?>>
    <label for="title">Title</label>
    <input type="text" id="title" name="title" value="<?=$_GET['title']?>">
    <label for="author">Author</label>
    <input type="text" id="author" name="author" value="<?=$_GET['author']?>">
    <label for="synopsis">synopsis</label>
    <input type="text" id="synopsis" name="synopsis" value="<?=$_GET['synopsis']?>">
    <input type="submit" name="deleteform">
    </form>
<a href="index.php">Home</a>

