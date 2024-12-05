<?php
session_start();
include_once(__DIR__ . '/database/databaseconnect.php');

if (!isset($_GET['id']) || !is_numeric($_GET['id'])){
    echo "Il faut un identifiant valable";
    return;
}


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
    <title>Suppression de recette</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once(__DIR__ . '/header.php'); ?>
        <h1>Supprimer la recette?</h1>
            <form action="recipes_post_delete.php" method="POST">
                <div class="mb-3 visually-hidden">
                    <label for="recipe_id" class="form-label">Id</label>
                    <input type="hidden" class="form-control" id="recipe_id" name="recipe_id" value="<?php echo $_GET['id']; ?>">
                </div>
                <button class="btn btn-danger" type="submit">La suppression est définitive</button>
            </form>
    </div>
    <?php include_once(__DIR__ . '/footer.php'); ?>
    
</body>
</html>