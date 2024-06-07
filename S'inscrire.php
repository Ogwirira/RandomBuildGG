<?php include('commun/header.php'); ?>

<main>
    <h2 class="soustitre">S'inscrire</h2>
    <form class="form_log" action="traitement.php" method="post">
        <aside class="formulaire">
            <div>
                <label class="label" for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" class="input" pattern="[A-Za-z0-9\x{00c0}-\x{00ff}]{4,20}" required>
                <a class="liens_log" href="Se_Connecter.html">Déjà un compte ? Connectez-vous</a>
            </div>
            <div>
                <label class="label" for="email">Email</label>
                <input type="email" name="email" class="input" required>
            </div>                  
            <div>
                <label class="label" for="password">Mot de Passe</label>
                <input type="password" id="password" name="password" class="input" pattern="[A-Za-z0-9_$]{8,}" required>
            </div>
        </aside>
        <div class="submit">
            <input class="valider" type="submit" value="Valider" >
        </div>
    </form>
</main>



<?php include('commun/footer.php') ?>