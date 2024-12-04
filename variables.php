<?php
    $recipesStatic = [
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

    $usersStatic = [
        [
            'full_name' => 'Mickaël Andrieu',
            'email' => 'mika@gmail.com',
            'age' => 34,
            'password' => 'mikpass'
        ],
        [
            'full_name' => 'Mathieu Nebra',
            'email' => 'mathieu.nebra@exemple.com',
            'age' => 34,
            'pass' => 'matpass'
        ],
        [
            'full_name' => 'Laurène Castor',
            'email' => 'laurene.castor@exemple.com',
            'age' => 28,
            'pass' => 'laurpass'
        ],
    ];

    include_once(__DIR__ . '/database/databaseconnect.php');
    // GET recipes
    $sqlRecipesQuery = 'SELECT * FROM recipes WHERE is_enabled = :is_enabled';
    $recipesStatement = $mysqlClient->prepare($sqlRecipesQuery);
    $recipesStatement->execute([
        'is_enabled' => 1,
    ]);
    $recipes = $recipesStatement->fetchAll();

    // GET users
    $sqlUsersQuery = 'SELECT * from users';
    $usersStatement = $mysqlClient->prepare($sqlUsersQuery);
    $usersStatement->execute();
    $users = $usersStatement->fetchAll();