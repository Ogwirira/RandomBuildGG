<?php include('commun/header.php') ;?>






    <main class="log">
        <h2 class="soustitre">Se connecter</h2>
        <section class="formulaire">
            <form class="form_log" action="traitementco.php" method="post">
                <div >                
                    <label class="label" for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" class="input" pattern="[A-Za-z0-9\x{00c0}-\x{00ff}]{5,20}" required>
                    <a class="liens_log" href="S'inscrire.php">Pas encore inscrit ?</a>
                </div>
                <div>
                    <label class="label" for="mdp_user">Mot de Passe</label>
                    <input type="password" id="password" name="mdp_user" class="input" pattern="[A-Za-z0-9_$]{8,}" required>
                    <a class="liens_log"  id="modal">Mot de passe oublié ?</a>
                </div>
            
                <div class="submit">
                <input class="valider" type="submit" value="Valider" >
                </div>
            </form>
            
              <!-- Modal -->
            <div  id="overlay">
                <div class="modal">
                    <h2>Mot de passe oublié ?</h2>
                    <a  id="close" >&times;</a>
                    <div class="contenu"><p class="para">Bah alors ? On a oublié de changer ses runes? 
                        Ou bien oublié d’acheter son item?
                        Pour réinitialiser son mot de passe, rentrez votre adresse mail ici :</p>
                        <form class="modal_form" action="forgot.php?mode=enter_email">
                            <label for="mail"></label>
                            <input class="email" type="email" name="mail" placeholder="Adresse Mail">
                        </form>
                    </div>
                </div>
            </div>
            
        </section>
        
    </main>
    <?php include('commun/footer.php') ?>