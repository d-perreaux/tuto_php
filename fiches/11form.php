<form action="11submit_form.php" method="GET">
    <h3>GET</h3>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <div id="email-help" class="form-text">Nous ne revendrons pas votre email</div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea class="form-control" id="message" name="message" placeholder="Exprimez vous"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Envoyer</button>
        </form>

<form method="POST" action="11submit_form.php">
    <h3>POST</h3>
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">
    <button type="submit">Envoyer</button>

</form>

<h3>htmlspecialchars($_POST['variable'])</h3>
<div> Elle va transformer les chevrons des balises HTML  
 <  et  >  en & lt;  et & gt;  respectivement. </div>