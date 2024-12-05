<?php
session_start();
include_once(__DIR__ . '/database/databaseconnect.php');

if(!isset($_GET['id']) || !is_numeric($_GET['id']))
{
    "nicht gut!!";
    return;
}

$recipeQuery = 'SELECT * FROM recipes WHERE recipe_id = :recipe_id';
$recipeStatement = $mysqlClient->prepare($recipeQuery);
$recipeStatement->execute([
    'recipe_id' => $_GET['id']
]);
$recipe = $recipeStatement->fetch(PDO::FETCH_ASSOC);

$commentsQuery = 'SELECT u.full_name, c.comment
FROM recipes r JOIN comments c
ON r.recipe_id = c.recipe_id
JOIN users u ON u.user_id = c.user_id
WHERE r.recipe_id = :recipe_id';
$commentsStatement = $mysqlClient->prepare($commentsQuery);
$commentsStatement->execute([
    'recipe_id' => $_GET['id']
]);
$comments = $commentsStatement->fetchAll();

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
    <title><?php echo $recipe['title']; ?></title>
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once(__DIR__ . '/header.php'); ?>
        <h1><?php echo $recipe['title']; ?></h1>
        
            <div class="card">
                <div class="card-body">
                    <div class="card-text"><?php echo $recipe['recipe']; ?></div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Commentaires</div>
                    <?php foreach($comments as $comment): ?>
                        <div class="card-text"><?php echo $comment['comment']; ?><br><?php echo $comment['full_name'];?></div><br>
                    <?php endforeach; ?>
                </div>
            </div>
    </div>
    <?php include_once(__DIR__ . '/footer.php'); ?>
 </body>

</html>