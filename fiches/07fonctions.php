<h2>Fonctions</h2>
<h3>Chaine de caractères</h3>
<h4>Longueur chaine : STRLEN()</h4>
<?php
    $myString = "string de longueur strlen(myString)";
    $myStringLenght = strlen($myString);
    echo $myStringLenght;
    echo("<br/>");
?>

<h4>Rechercher et remplacer : STR_REPLACE()</h4>
<?php
    $myString = "tatata";
    echo $myString . ' => ';
    $myString = str_replace("t", "b", $myString);
    echo $myString;
    echo("<br/>");
?>

<h4>Formater chaine de caractères avec SPRINTF</h4>
<?php
    $recipe = [
        'title' => 'Salade Romaine',
        'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
        'author' => 'laurene.castor@exemple.com',
    ];

    echo sprintf(
        '%s par "%s" : %s',
        $recipe['title'],
        $recipe['recipe'],
        $recipe['author'],
    );
?>

<h3>Date</h3>
<?php
    $year = date('Y');
    echo $year;
    echo("<br/>");
    $month = date('m');
    echo $month;
    echo("<br/>");
    $day = date("d");
    echo $day;
    echo("<br/>");
    $hours = date("H");
    echo $hours;
    echo("<br/>");
    $minutes = date("i");
    echo $minutes;
    echo("<br/>");

    $date = date("d/m/Y");
    echo $date;
    echo("<br/>");
    $time = date("H \h i");
    echo $time;
    echo("<br/>");
?>

<h3>Création fonctions</h3>
<?php
    $romanSalad  = [
        "title" => "Salade romaine",
        "recipe" => "Etape 1: ...",
        "author" => "bernard@gmail.com",
        'is_enabled' => true
    ];

    $sushis = [
        'title' => 'Sushis',
        'recipe' => 'Etape 1 : du saumon ; Etape 2 : du riz',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ];

    $escalopeMilanaise = [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ];

    $recipes = [$romanSalad, $sushis, $escalopeMilanaise];

    function isValideRecipe(array $recipe) : bool {
        if(array_key_exists("is_enabled", $recipe)){
            $isEnabled = $recipe["is_enabled"];
        } else {
            $isEnabled = false;
        }
        return $isEnabled;
    }

    function getRecipes(array $recipes) : array {
        $validRecipes = [];
        foreach($recipes as $recipe){
            if (isValideRecipe($recipe)) {
                $validRecipes[] = $recipe;
            }
        }
        return $validRecipes;
    }

    foreach(getRecipes($recipes) as $recipe){
        echo $recipe["title"];
        echo("<br/>");
    };
?>