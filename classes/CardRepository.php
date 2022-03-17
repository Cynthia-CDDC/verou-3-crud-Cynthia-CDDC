<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern

use LDAP\Result;

class CardRepository
{   
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create($values): void
    {   
        $query = "INSERT INTO `books` (`title`, `author`, `synopsis`) VALUES($values)";
        $this->databaseManager->connection->query($query);
        return;
    }

    // Get one
    public function find(): array
    {

    }

    // Get all
    public function get(): PDOStatement
    {
        // We get the database connection first, so we can apply our queries with it
        $query = "SELECT * FROM `books`";
        $result = $this->databaseManager->connection->query($query);
        return $result;
    }
    
    public function update($id): PDOStatement
    {  
        $query = "UPDATE books SET title = '{$_POST['title']}', author = '{$_POST['author']}', synopsis = '{$_POST['synopsis']}'  WHERE id = {$id}";
        $updateQuery = $this->databaseManager->connection->query($query);
        header('Location: index.php');
        return $updateQuery;
    }

    public function delete($id): PDOStatement
    {   
        $query = "DELETE FROM books WHERE id= {$id}";
        $deleteQuery = $this->databaseManager->connection->query($query);
        header('Location: index.php');
        return $deleteQuery;
    }

}