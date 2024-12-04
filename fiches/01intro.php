<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test <?php echo "title<div>Mon \"Texte\"</div>"; ?></h2>
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php echo "tatata" ?> <br />
            Voici quelques petits tests :
        </p>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/y h:i:d'); ?>.</p>
        
        <?php 
            echo "avant comm"; // comm
            // commentaire monoligne
            /* comm
            multilignes
            */
            echo " après comm";
        ?>
    </body>
</html>