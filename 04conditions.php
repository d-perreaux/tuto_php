<?php 
    $isEnabled = true;
    if ($isEnabled === true){
        echo "Autorisé === true";
    }
    echo("<br />");
    if ($isEnabled){
        echo "Autorisé simplifié";
    } else {
        echo "Non autorisé";
    }
    echo("<br />");

    $isAllowedToEnter = "Non";
    if($isAllowedToEnter === "Oui"){
        echo "Vous êtes autorisé à entrer";
    } elseif($isAllowedToEnter === "Non"){
        echo "Vous n'êtes pas autorisé à entrer";
    } else {
        echo "Droits non valides";
    }
    echo("<br />");

    $isFalse = false;
    if(! $isFalse){
        echo "isFalse est faux";
    }
    echo("<br />");

    if($isEnabled && $isAllowedToEnter === "Oui"){
        echo "todo bene";
    } else {
        echo "nicth gut";
    }
    echo("<br />");

    if(($isEnabled && $isAllowedToEnter) || !$isFalse){
        echo "(true AND true) OR (true)";
    }
    echo("<br />");
?>

<?php
    $myTernaire = (5 < 4)? "5 < 4" : "5 > 4";
    echo $myTernaire;
    echo("<br />")
?>

<?php $isTrue = true; ?>
<?php if($isTrue): ?>
    <h1>Liste des recettes à base de poulet</h1>
<?php endif; ?>

<?php
    $grade = 5;

    switch($grade){
        case 0:
            echo "note = 0";
        // break;

        case 5:
            echo "note = 5";
        // break;

        default:
            echo "pas de note à donner";
    }
?>