<?php include('commun/header.php'); include('requetes_affichage.php') ?>

<main>
    <h2 class="soustitre1">Accueil</h2>
    <div class="marg"></div>
    <section class="section_acceuil">
        <article class="perso">
            <img class="icon_perso" src="<?php echo $perso["img_perso"] ?>" id="personnage" alt="personnage">
        </article>
        <article class="contenair">
            <div class="perso_contenair">
                <?php echo "<div id='nom_perso' class='nom_perso'>" . $perso["nom_perso"]. " </div>"; ?>  
                <img class="icon_role" src="<?php echo $result["img_role"] ?>" id="role" alt="icon_role">
            </div>
            <div class="items">
                <div><img id="bottes" class="item_img" src="<?php echo $result["img_botte"] ?>" alt="img_botte"></div>
                <div><img id="items1" class="item_img" src="<?php echo $result["img_item1"] ?>" alt="img_item1"></div>
                <div><img id="items2" class="item_img" src="<?php echo $result["img_item2"] ?>" alt="img_item2"></div>
                <div><img id="items3" class="item_img" src="<?php echo $result["img_item3"] ?>" alt="img_item3"></div>
                <div><img id="items4" class="item_img" src="<?php echo $result["img_item4"] ?>" alt="img_item4"></div>
                <div><img id="items5" class="item_img" src="<?php echo $result["img_item5"] ?>" alt="img_item5"></div>      
            </div>
        </article>       
        <article class="boutons">
           
            <a id="pick"  onclick="handleRedirect()"  class="bouton">Lancez le dé</a>       
            <div class="boutons_2">

            </div>
        </article> 
    </section>    
    <section class="runes_contenair">
        <article class="runes">                
            <img id="arbre_runes" src="<?php echo $result["img_rune"] ?>" alt="img_rune">                
            <aside>
                <div class="runes_primaire">
                    <img src="<?php echo $result["img_sousrune1"] ?>" alt="img_sousrune1">
                    <img src="<?php echo $result["img_sousrune2"] ?>" alt="img_sousrune2">
                    <img src="<?php echo $result["img_sousrune3"] ?>" alt="img_sousrune3">
                </div> 
                <div class="runes_secondaire">
                    <img src="<?php echo $result["img_sousrune4"] ?>" alt="img_sousrune4">
                    <img src="<?php echo $result["img_sousrune5"] ?>" alt="img_sousrune5">
                </div>
                <div class="runes_tertiaire">
                    <img src="<?php echo $result["img_stat1"] ?>" alt="img_stat1">
                    <img src="<?php echo $result["img_stat2"] ?>" alt="img_stat2">
                    <img src="<?php echo $result["img_stat3"] ?>" alt="img_stat3">
                </div>
            </aside>
        </article>
    </section>
</main>
<?php include('commun/footer.php');
//  echo $string1; echo $string2; 
 ?>
