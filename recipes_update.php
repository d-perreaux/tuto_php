<?php
session_start();
include_once(__DIR__ . '/variables.php');
include_once(__DIR__ . '/functions.php');
include_once(__DIr__ . '/database/databaseconnect.php');

$getData = $_GET;

if(!isset($getData['id']) || !is_numeric($getData['id'])){
    echo "Il faut un identifiant de recette valide";
    return;
}
$recipeId = $getData['id'];

$recipeQuery = 'SELECT * FROM recipes WHERE recipe_id = :recipe_id';
$recipeStatement = $mysqlClient->prepare($recipeQuery);
$recipeStatement->execute([
    'recipe_id' => $recipeId
]);

$recipe = $recipeStatement->fetch(PDO::FETCH_ASSOC);

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
    <title>Modifier recette</title>
 </head>
 <body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once(__DIR__ . '/header.php'); ?>
        <h1>Modifiez votre recette! </h1>
        <form action="recipes_post_update.php" method="POST">
            <div class="mb-3 visually-hidden">
                <label for="recipe_id" class="form-label">Identifiant recette</label>
                <input type=hidden" class="form-control" id="recipe_id" name="recipe_id" value="<?php echo $recipeId?>">
            </div>
           
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input id="title" name="title" class="form-control" value=<?php echo strip_tags($recipe['title'])?>>
            </div>
            <div class="mb-3">
                <label for="recipe" class="form-label">Description de la recette</label>
                <textarea class="form-control" id="recipe" name="recipe"><?php echo trim(strip_tags($recipe['recipe'])); ?></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </form>
    </div>
    <?php include_once(__DIR__ . '/footer.php'); ?>
 </body>
 </html>