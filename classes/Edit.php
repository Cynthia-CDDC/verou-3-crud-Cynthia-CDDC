// TODO: check in index.php which action is made : use switch cases.
// TODO: go to the right function update() still in index.php
// TODO: show Edit.php
// TODO: go to the update function() in CardRepository.php
// TODO: Fetch data from the table using id
// TODO: check in function update() if inputfields are filled in -> 
// if no: do nothing
// if yes: go execute update function() 

<form method="POST">
    <label for="title">Title</label>
    <input type="text" id="title" name="title">
    <label for="author">Author</label>
    <input type="text" id="author" name="author">
    <label for="synopsis">synopsis</label>
    <input type="text" id="synopsis" name="synopsis">
    <input type="submit" name="action">
</form>