<?php
    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => 'Etape 1 : des flageolets !',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => 'Etape 1 : de la semoule',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
        [
            'title' => 'Escalope milanaise',
            'recipe' => 'Etape 1 : prenez une belle escalope',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
        ],
    ];

    $users = [
        [
            'full_name' => 'Mickaël Andrieu',
            'email' => 'mika@gmail.com',
            'age' => 34
        ],
        [
            'full_name' => 'Mathieu Nebra',
            'email' => 'mathieu.nebra@exemple.com',
            'age' => 34,
        ],
        [
            'full_name' => 'Laurène Castor',
            'email' => 'laurene.castor@exemple.com',
            'age' => 28,
        ],
    ]
?>

<?php
    function isValideRecipe(array $recipe): bool {
        if(array_key_exists('is_enabled', $recipe)){
            $isEnabled = $recipe['is_enabled'];
        } else {
            $isEnabled = false;
        }
        return $isEnabled;
    }

    function getRecipes(array $recipes): array {
        $validRecipes = [];
        foreach($recipes as $recipe){
            if(isValideRecipe($recipe)){
                $validRecipes[] = $recipe;
            }
        }
        return $validRecipes;
    }

    function displayAuthor(string $email, array $users): string {
        $stringReturn = "Pas d'utilisateur trouvé";
        foreach($users as $user){
            if($user['email'] === $email){
                $stringReturn = "{$user['full_name']} ({$user['age']} ans)";
            }
        }
        return $stringReturn;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes</title>
</head>
<body>
    <ul>
        <?php 
        foreach(getRecipes($recipes) as $recipe)
        {
            echo "<li><div>{$recipe['title']}</div>";
            echo "<div>{$recipe['recipe']}</div>";
            echo '<div>' . displayAuthor($recipe['author'], $users) . '</div>';
            echo "</li>";
        };
        ?>
    </ul>
</body>
</html>