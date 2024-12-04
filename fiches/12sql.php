<?php
/*
    SQL : 
    - VARCHAR = texte court (entre 1 et 255 caractères)
    - TEXT = texte long (un roman passe easy)
*/
try {
    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=partage_de_recettes;charset=utf8', //premier attribut = DSN = Data Source Name
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMEssage());
}
?>

<?php
$sqlQuery = 'SELECT * FROM recipes WHERE is_enabled = TRUE';
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
    foreach($recipes as $recipe): 
?>
    <p><?php echo $recipe['author']?></p>
<?php endforeach; ?>


<!-- Existe arguments anonymes (?) et arguments nommés (:variable) -->
<?php

$sqlQuery = 'SELECT * FROM recipes WHERE author = :author AND is_enabled = :is_enabled';

$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute([
    'author' => 'mathieu.nebra@exemple.com',
    'is_enabled' => true,
]);
$recipes = $recipesStatement->fetchAll();
foreach($recipes as $recipe): ?>
<p><?php echo $recipe['title'] ?></p>
<?php endforeach; ?>



