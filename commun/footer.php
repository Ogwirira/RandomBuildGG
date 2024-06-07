
<footer class="footer">
    <nav>
        <ul class="navbar_footer">
            <li class="liens"><h1 class="title">Random<br> build</h1> </li>
            <div class="liens_footer">       

                <?php if(!isset($_SESSION["nom_user"])) : ?>
            <li class="liens"><a href="Se_Connecter.php"> Se connecter </a></li>
            <li class="liens"><a href="S'inscrire.php"> S'inscrire </a></li>
            <?php else : ?>
            <li class="liens"><a href=""> <?php echo $_SESSION['nom_user'] ?></a></li>
            <li class="liens"><a href="deconnexion.php"> Se Déconnecter </a></li>
            <?php endif ;?>
                <li class="liens"><a href="Règles.php">Règles</a></li>
            </div>
        </ul>
    </nav>
</footer>
</body>
<script src="asset/js/projet_perso.js"></script>
</html>
