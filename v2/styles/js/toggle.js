/* Afficher la création de cavalier ou afficher les cavaliers */
let btnCreateCav = document.getElementById("btnCreateCav");
let createCav = document.getElementById("createCav");
let showCav = document.getElementById("showCav");
createCav.style.display = "none";

btnCreateCav.addEventListener("click", () => {
    if (getComputedStyle(createCav).display != "none") {
        createCav.style.display = "none";
        showCav.style.display = "block";
        btnCreateCav.textContent = 'Ajouter un cavalier';

    } else {
        createCav.style.display = "block";
        showCav.style.display = "none";
        btnCreateCav.textContent = 'Afficher les cavaliers';
    }
})

/* ------------------------------------------------------------- */

/* Créer un responsable ou non*/

let respTrue = document.getElementById("respTrue");
let respFalse = document.getElementById("respFalse");
let formResp = document.getElementById("formResp");
let formResp2 = document.getElementById("formResp2");
let formResp3 = document.getElementById("formResp3");
let btnCav = document.getElementById("btnCav");
let btnCav2 = document.getElementById("btnCav2");

formResp.style.display = "none";
formResp2.style.display = "none";
formResp3.style.display = "none";
btnCav2.style.display = "none";


respTrue.addEventListener("click", () => {
    if (getComputedStyle(formResp).display == "none") {
        formResp.style.display = "flex";
        formResp2.style.display = "flex";
        formResp3.style.display = "flex";
        btnCav2.style.display = "flex";
        btnCav.style.display = "none";

    }
})
respFalse.addEventListener("click", () => {
    if (getComputedStyle(formResp).display == "flex") {
        formResp.style.display = "none";
        formResp2.style.display = "none";
        formResp3.style.display = "none";
        btnCav2.style.display = "none";
        btnCav.style.display = "flex";


    }
})
/* ------------------------------------------------------------- */