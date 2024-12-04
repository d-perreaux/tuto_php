<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET['clé']</title>
</head>
<body>
    <h1>$_GET['clé']</h1>
    <?php
        $getData = $_POST;
    ?>
    <?php echo isset($getData['email']) ? 'true' : 'false'; ?>
    <?php if(isset($getData['email']) && isset($getData['message'])): ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Email</b> : <?php echo $_POST['email']; ?></p>
                <p class="card-text"><b>Message</b> : <?php echo htmlspecialchars($_POST['message']); ?></p>
                <!-- htmlspecialchars pour remplacer les chevron par &lt et &gt-->
            </div>
        </div>
    <?php else: ?>
        <div class="card">
            <div class="car-body">
                <p>Votre message n'a pas pu être pris en compte</p>
            </div>
        </div>
    <?php endif; ?>

    <?php
        $getData = $_POST;

        if(
            !isset($getData['email'])
            || !filter_var($getData['email'], FILTER_VALIDATE_EMAIL)
            || !isset($getData['message'])
            || empty($getData['message'])
            || trim($getData['message']) === '' // message uniquement composé d'espaces blancs
        ) {
            echo '
            <div class="card">
            <div class="car-body">
                <p>Votre message n\'a pas pu être pris en compte</p>
            </div>
        </div>';
        }
    ?>

    <?php
        if(isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] === 0){
            echo $_FILES['screenshot']['name'];
            echo('<br/>');
            echo $_FILES['screenshot']['type'];
            echo('<br/>');
            echo $_FILES['screenshot']['size'];
            echo('<br/>');
            echo $_FILES['screenshot']['error']; //0 si pas d'erreur
            echo('<br/>');

            if($_FILES['screenshot']['size'] < 10000000){
                $fileInfos = pathinfo($_FILES['screenshot']['name']);
                // La fonction pathinfo renvoie un tableau (array) contenant 
                // entre autres l'extension du fichier dans  $fileInfo['extension']  .
                $extension = $fileInfos['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                if(!in_array($extension, $allowedExtensions)){
                    echo "L'envoi n'a pas pu être effectué car le format {$extension} n'est pas autorisé";
                } else {
                    $path = __DIR__ . "/uploads/";
                    if(!is_dir($path)){
                        echo 'dossier de sauvegarder n\'existe pas';
                        return;
                    }

                    move_uploaded_file(
                        $_FILES['screenshot']['tmp_name'],
                        $path . basename($_FILES['screenshot']['name'])
                    );
                    // Lorsque vous mettrez le script sur Internet à l'aide d'un logiciel FTP, 
                    // vérifiez que le dossier « Uploads » sur le serveur existe, et qu'il a les droits d'écriture. 
                    // Pour ce faire, sous FileZilla par exemple, faites un clic droit sur le dossier et choisissez 
                    // « Attributs du fichier ».
                    // Cela vous permettra d'éditer les droits du dossier (on parle de CHMOD). 
                    // Mettez les droits à 733, ainsi PHP pourra placer les fichiers téléversés dans ce dossier.
                    echo "Fichier sauvegardé!";
                }
            } else {
                echo 'problème de taille';
            }
        }
    ?>

</body>
</html>