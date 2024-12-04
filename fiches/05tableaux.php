<?php
    $user1 =  ["Babar", "email", 34];
    echo "nom: {$user1[0]}, mail: {$user1[1]}, age : {$user1[2]}";

    echo("<br/>");

    $user2 = ["Bernard", "net", 12];
    $users = [$user1, $user2];
    echo $users[1][2]; //12

    echo("<br/>");
?>

<?php
    $user3 = array("Bob", "outlook", 99);
    echo $user3[2];
    echo("<br/>");
?>

<?php
    $user4[0] = "Boris";
    $user4[1] = "gmail";
    $user4[2] = "26";
    echo $user4[0];
    echo("<br/>");
?>

<?php
    $user5[] = "Barnabé";
    $user5[] = "yahoo";
    $user5[] = "129";
    echo $user5[0];
    echo("<br/>");
?>

<?php
    $recipe = [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
        'author' => 'john.doe@exemple.com',
        'enabled' => true,
    ];
    echo $recipe['title'];
    echo("<br/>");
?>

<?php
    $recipe2['title'] = 'Soupe';
    $recipe2['recipe'] = 'Etape 1 : des pdt, Etape 2 : ...';
    $recipe2['author'] = 'bobby.doe@exemple.com';
    $recipe2['enable'] = true;
    echo $recipe2['title'];
    echo("<br/>");
?>

<h2>Recherche dans un tableau</h2>
    <h3>Vérfier qu'une clé existe dans un tableau : ARAY_KEY_EXISTS</h3>

<?php
    $recipe = [
        "title" => "Salade Romaine",
        "recipe" => "etape 1 ...",
        "author" => "moi"
    ];

    if(array_key_exists("title", $recipe)){ // renvoie true or false
        echo $recipe["title"];
        echo "<br/>";
    }

    if(!array_key_exists("com", $recipe)){
        echo "pas de com dans les receettes";
    }
?>

    <h3>Vérifier si valeur existe dans un tableau avec IN_ARRAY</h3>

<?php
    $users = [
        'Mathieu Nebra',
        'Mickaël Andrieu',
        'Laurène Castor',
    ];

    if(in_array("Mathieu Nebra", $users)){ // renvoie tue or false
        echo "Mat est un user";
    }
?>

    <h3>Récupérer la clé d'une valeur dans un tableau avec ARRAY_SEARCH</h3>

<?php
    $users = [
        'Mathieu Nebra',
        'Mickaël Andrieu',
        'Laurène Castor',
    ];

    $positionUser = array_search("Laurène Castor", $users);
    echo $positionUser? $positionUser : "pas trouvé";
    echo "<br/>";


    $positionUser = array_search("babar", $users);
    echo $positionUser? $positionUser : "pas trouvé";
    echo "<br/>";
?>
