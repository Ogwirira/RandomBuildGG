<?php

include_once("commun/inc.php");

try {
    // Préparer et exécuter une seule requête pour récupérer toutes les données nécessaires
    $sql = "
        SELECT 
            (SELECT DISTINCT img_botte FROM botte ORDER BY RAND() LIMIT 1) AS img_botte,
            (SELECT DISTINCT img_item FROM item ORDER BY RAND() LIMIT 1) AS img_item1,
            (SELECT DISTINCT img_item FROM item ORDER BY RAND() LIMIT 1) AS img_item2,
            (SELECT DISTINCT img_item FROM item ORDER BY RAND() LIMIT 1) AS img_item3,
            (SELECT DISTINCT img_item FROM item ORDER BY RAND() LIMIT 1) AS img_item4,
            (SELECT DISTINCT img_item FROM item ORDER BY RAND() LIMIT 1) AS img_item5,
            (SELECT DISTINCT img_role FROM role ORDER BY RAND() LIMIT 1) AS img_role,
            (SELECT DISTINCT img_rune FROM rune ORDER BY RAND() LIMIT 1) AS img_rune,
            (SELECT DISTINCT img_sousrune FROM sousrune ORDER BY RAND() LIMIT 1) AS img_sousrune1,
            (SELECT DISTINCT img_sousrune FROM sousrune ORDER BY RAND() LIMIT 1) AS img_sousrune2,
            (SELECT DISTINCT img_sousrune FROM sousrune ORDER BY RAND() LIMIT 1) AS img_sousrune3,
            (SELECT DISTINCT img_sousrune FROM sousrune ORDER BY RAND() LIMIT 1) AS img_sousrune4,
            (SELECT DISTINCT img_sousrune FROM sousrune ORDER BY RAND() LIMIT 1) AS img_sousrune5,
            (SELECT DISTINCT img_stat FROM stat1 ORDER BY RAND() LIMIT 1) AS img_stat1,
            (SELECT DISTINCT img_stat FROM stat1 ORDER BY RAND() LIMIT 1) AS img_stat2,
            (SELECT DISTINCT img_stat FROM stat1 ORDER BY RAND() LIMIT 1) AS img_stat3
    ";

    $qry = $pdo->prepare($sql);
    $qry->execute();

    // Récupérer le résultat
    $result = $qry->fetch(PDO::FETCH_ASSOC);

    // Sélectionner nom et image du même personnage
    $perso_sql = "SELECT img_perso, nom_perso FROM perso ORDER BY RAND() LIMIT 1";
    $perso_qry = $pdo->prepare($perso_sql);
    $perso_qry->execute();
    $perso = $perso_qry->fetch(PDO::FETCH_ASSOC);


} catch(PDOException $err) {
    echo "Erreur : " . $err->getMessage();
};
// try{
//     $string1=implode(' , ' , $result);
//     $string2=implode(' , ' , $perso);
//     $build_sql = "INSERT INTO builds (result,perso) VALUES ($string1,$string2)";
//     $build_qry = $pdo->prepare($build_sql);
//     $build_qry->execute();
// }catch(PDOException $err) {
//     echo "Erreur : " . $err->getMessage();
// };

