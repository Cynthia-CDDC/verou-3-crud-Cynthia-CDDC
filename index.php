<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';

function pre_r($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);

// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
$action = $_GET['action'] ?? null;

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)
switch ($action) {
    case 'create':
        create($cardRepository);
        break;
    case 'edit':
        update($cardRepository);
        break;
    case 'delete':
        delete($cardRepository);
        break;
    case 'showMore':
        showMore($cardRepository);
        break;
    default:
        overview($cardRepository);
        break;
}

function overview($cardRepository)
{   
    // Load your view
    // Tip: you can load this dynamically and based on a variable, if you want to load another view
    $cards = $cardRepository->get();
    require 'overview.php';
}

function create($cardRepository)
{
    //provide the create logic
    $values = "'{$_GET['title']}', '{$_GET['author']}', '{$_GET['synopsis']}'";
    $cardRepository->create($values);
}
function update($cardRepository)
{   
    if (!empty($_POST))
    {
        $cardRepository->update($_GET['id']);
    }
    require 'edit.php';
}
function delete($cardRepository)
{   
    if (!empty($_POST))
    {   
        $cardRepository->delete($_GET['id']);
    }
    require 'delete.php';
}
function showMore($cardRepository)
{   
    $books = $cardRepository->showMore($_GET['id']);
    require 'show.php';
}

