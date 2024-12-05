<?php
session_start();
include_once(__DIR__ . '/database/databaseconnect.php');

if(!isset($_POST['recipe_id']) || !is_numeric($_POST['recipe_id'])){
    echo 'nicht gut';
    return;
}

$recipe_id = $_POST['recipe_id'];

$sqlQuery = 'DELETE FROM recipes WHERE recipe_id = :recipe_id';
$recipeStatement = $mysqlClient->prepare($sqlQuery);
$recipeStatement->execute([
    'recipe_id' => $recipe_id
]) or die(print_r($mysqlClient->errorInfo()));

header(
    'Location: ' . $rootUrl . 'index.php'
);