
// var pick = document.getElementById("pick");

// // Tableaux d'images
// var perso_random = ["asset/img/braum.png", "asset/img/lissandra.png", "asset/img/hecarim.png", "asset/img/yone.png", "asset/img/yasuo.png"];
// var role_random = ["asset/img/top.png", "asset/img/bot.png", "asset/img/jungle.png", "asset/img/mid.png", "asset/img/suppor.png"];
// var boots_random = ["asset/img/mercury.png", "asset/img/lucidity.png", "asset/img/mobi.png"];
// var item_random_1 = ["asset/img/warmogs.png", "asset/img/bloodthirster.png", "asset/img/mortalreminder.png"];
// var item_random_2 = ["asset/img/ga.png", "asset/img/manamune.png", "asset/img/youmu.png"];
// var item_random_3 = ["asset/img/night.png", "asset/img/essencereaver.png", "asset/img/gargoyle.png"];
// var item_random_4 = ["asset/img/axiom.png", "asset/img/hubris.png", "asset/img/serylda.png"];
// var item_random_5 = ["asset/img/rabadon.png", "asset/img/banshee.png", "asset/img/redemption.png"];

// // Fonction pour choisir aléatoirement une image et l'afficher
// function randomImage(arr, elementId) {
//     var rand = Math.floor(Math.random() * arr.length);
//     document.getElementById(elementId).src = arr[rand];
//     return arr[rand];
// }

// // Événement au clic sur le bouton de choix
// pick.addEventListener("click", function () {
    
//     // Affichage de l'image du personnage
//     var perso = randomImage(perso_random, "personnage");
//     // Affichage du nom du personnage
//     switch (perso) {
//         case "asset/img/braum.png":
//             document.getElementById("nom_perso").innerHTML = 'Braum';
//             break;
//         case "asset/img/lissandra.png":
//             document.getElementById("nom_perso").innerHTML = 'Lissandra';
//             break;
//         case "asset/img/hecarim.png":
//             document.getElementById("nom_perso").innerHTML = 'Hecarim';
//             break;
//         case "asset/img/yone.png":
//             document.getElementById("nom_perso").innerHTML = 'Yone';
//             break;
//         case "asset/img/yasuo.png":
//             document.getElementById("nom_perso").innerHTML = 'Yasuo';
//             break;
//         default:
//             console.log('Personnage inconnu');
//     }
//     // Affichage aléatoire du rôle, des bottes et des objets
//     randomImage(role_random, "role");
//     randomImage(boots_random, "bottes");
//     randomImage(item_random_1, "items1");
//     randomImage(item_random_2, "items2");
//     randomImage(item_random_3, "items3");
//     randomImage(item_random_4, "items4");
//     randomImage(item_random_5, "items5");
// });

var clickBtn = document.getElementById("modal");
var popup = document.getElementById("overlay");
var closeBtn = document.getElementById("close");

function visible() {
    popup.style.visibility="visible";
    popup.style.opacity= '1';

};
function hidden(){
    popup.style.visibility="hidden";
    popup.style.opacity= '0';
}
clickBtn.addEventListener('click', ()=>{
    visible();
});
closeBtn.addEventListener('click', ()=>{
    hidden();
});


function handleRedirect() {
    // Redirige vers la page PHP qui gère la redirection
    window.location.href = 'redirige.php';
};



  