<?php
session_start();
include_once(__DIR__ . '/database/databaseconnect.php');

$postData = $_POST;

if(
    !isset($postData['title'])
    || !isset($postData['recipe'])
    || trim(strip_tags($postData['title'])) === ''
    || trim(strip_tags($postData['recipe'])) === ''

    ){
        echo "Il faut un titre et une recette";
        return;
    }

$title = trim(strip_tags($postData['title']));
$recipe = trim(strip_tags($postData['recipe']));

$sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES
(:title, :recipe, :author, :is_enabled)';


$insertRecipe = $mysqlClient->prepare($sqlQuery);
$insertRecipe->execute([
    'title' => $title,
    'recipe' => $recipe,
    'author' => $_SESSION['LOGGED_USER']['email'],
    'is_enabled' => 1
]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        	rel="stylesheet"
	>
    <title>Creation Recette</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once(__DIR__ . '/header.php'); ?>
        <h1>Recette ajoutée avec succès!</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $title ?></h5>
                <p class="card-text"><b>Email</b> : <?php echo $_SESSION['LOGGED_USER']['email']; ?></p>
                <p class="card-text"><b>Recette</b> : <?php echo $recipe; ?></p>
            </div>
        </div>
    </div>
    <?php include_once(__DIR__ . '/footer.php'); ?>
    
</body>
</html>
