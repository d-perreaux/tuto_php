<?php $userAge = 17; ?> 
<?php 
    // camelCase
    // Commence toujours pas $    
?>
<?php echo $userAge; ?>

<?php $myString = "Mon nom est \"Dimitri\""; ?>
<?php echo "<div>$myString </div>";?>

<?php $myBool = true; ?>
<?php 
    echo $myBool; // echo un true affiche : 1
    echo "</br>";
    echo $myBool ? "true" : "false";
    echo "</br>";
    $myBool = false;
    echo $myBool; // Attention, echo un false n'affiche rien
    echo "</br>";
    echo $myBool ? "true" : "false";
    echo "</br>";
    $myBool = NULL;
    echo $myBool; // Attention, echo un NULL n'affiche rien
    echo $myBool ? "true" : "false"; // dans la condition, null équivaut à false
    echo "</br>";
?>

<?php 
    $myName = "Dimitri";
    echo "Bonjour {$myName}, comment vas-tu?"; // Interpolation avec guillemets DOUBLE
    echo "</br>";
    echo 'Bonjour {$myName}, comment vas-tu?'; // Pas d'interpolation avec guillement simple
    echo "</br>";
    echo 'Bonjour ' . $myName . ', comment vas-tu?'; // Concaténation avec < . >
?>

<?php 
    $myVar = "tata";
    echo $myVar;
    echo('<br/>');
    echo isset($myVar);
?>