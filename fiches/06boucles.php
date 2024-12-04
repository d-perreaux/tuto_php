<h1>Boucles</h1>

<h2>WHILE</h2>

<?php
    $inc = 0;

    while($inc < 5){
        echo $inc;
        echo "<br/>";
        $inc ++;
    }
?>

<?php
    $inc2 = 0;
?>
<?php while($inc2 < 8): ?>
    <?php echo "<div>{$inc2}</div>"; 
    $inc2++; ?>
<?php endwhile; ?>

<?php
    $users = [
        [
            'full_name' => 'Mickaël Andrieu',
            'email' => 'mickael.andrieu@exemple.com',
            'age' => 34,
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
    ];
    $lines = count($users); 
    $counter = 0;
    while ($counter < $lines) {
        echo $users[$counter]['full_name'] . ' ' . $users[$counter]['email'] . '<br />';
        $counter++;
    }
?>

<h2>FOR</h2>

<?php
    for($counter = 0; $counter < count($users); $counter++){
        echo $users[$counter]['full_name'] . ' ' . $users[$counter]['email'] . '<br />';
    }
?>

<ol>
    <?php for($counter = 0; $counter < count($users); $counter ++): ?>
        <li><?php echo $users[$counter]['full_name'] . ' ' . $users[$counter]['email'] . '<br />'; ?>
    <?php endfor; ?>
</ol>

<h2>FOREACH</h2>
<?php
    foreach($users as $user){
        echo $user['full_name'];
        echo "<br/>";
    }
?>

<?php
    $recipe = [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
        'author' => 'mickael.andrieu@exemple.com',
        'enabled' => true,
    ];

    foreach($recipe as $value){
        echo $value;
        echo "<br/>";
    }
?>

<?php
    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
        [
            'title' => 'Escalope milanaise',
            'recipe' => '',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Salade Romaine',
            'recipe' => '',
            'author' => 'laurene.castor@exemple.com',
            'is_enabled' => false,
        ],
    ];

    foreach($recipes as $recipe) {
        echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . "<br>";

        foreach($recipe as $property => $value){
            echo "{$property} vaut {$value} <br/>";
    
        }; 
        echo "<br/>";
    };
?>

<?php
    echo "<pre>";
    print_r($recipes);
    echo "</pre>";
?>