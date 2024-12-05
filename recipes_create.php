<?php
session_start();
include_once(__DIR__ . '/functions.php');
include_once(__DIR__ . '/variables.php');
include_once(__DIR__ . '/database/databaseconnect.php');
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
    <title>Créer une recette</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once(__DIR__ . '/header.php'); ?>
       <form action='recipes_post_create.php' method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" id="title" class="form-control">
            <div id="title-help" class="form-text">Choisissez un titre percutant! </div>
        </div>
        <div class="mb-3">
            <label for="recipe" class="form-label">Recette</label>
            <textarea id="recipe" name="recipe" class="form-control" placeholder="Seulement du contenu vous apprtement ou libre de droits." ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
    <?php include_once(__DIR__ . '/footer.php'); ?>
</body>
</html>