<h1>$_GET['clé']</h1>
    <?php
        $getData = $_GET;
    ?>
    <?php echo isset($getData['email']) ? 'true' : 'false'; ?>
    <?php if(isset($getData['email']) && isset($getData['message'])): ?>
        <div>

                <h5>Rappel de vos informations</h5>
                <p ><b>Email</b> : <?php echo $_GET['email']; ?></p>
                <p><b>Message</b> : <?php echo $_GET['message']; ?></p>

        </div>
    <?php else: ?>
        <div>

                <p>Votre message n'a pas pu être pris en compte</p>

        </div>
    <?php endif; ?>

    <?php
        $getData = $_GET;

        if(
            !isset($getData['email'])
            || filter_var(($getData['email']), FILTER_VALIDATE_EMAIL)
            || isset($getData['message'])
            || empty($getData['message'])
            || trim($getData['message']) === '' // message uniquement composé d'espaces blancs
        ) {
            echo '
            <div>

                <p>Votre message n\'a pas pu être pris en compte</p>

        </div>';
        }
    ?>

<?php
    echo htmlspecialchars($_POST['nom']);
?>