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
        // replace dummy data by real one
        // We get the database connection first, so we can apply our queries with it
        $query = "SELECT * FROM `books`";
        $result = $this->databaseManager->connection->query($query);
        return $result;
    }
    
    public function update($id): void
    {   //TODO: finish update query
        $query = "UPDATE `books` SET title = '{$_GET}' WHERE id = {$id}";
        return;
    }

    public function delete(): void
    {

    }

}