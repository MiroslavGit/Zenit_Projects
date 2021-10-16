/* Po stlačení hocijakého tlačidla sa zobrazí modal : riešenie */
var tlacidla = document.getElementsByClassName("btn");

var popisRezervacky = document.getElementById('modal-popis');
var cenaRezervacky = document.getElementById('modal-cena');



Array.from(tlacidla).forEach(v => v.addEventListener('click', function() {
    if (this.id == "prvaRezervacka_button") {
        popisRezervacky.innerHTML = "Generálna oprava";
        cenaRezervacky.innerHTML = "50,00€/hod";
    } else if (v.id == "druhaRezervacka_button") {
        popisRezervacky.innerHTML = "Čalúnenie";
        cenaRezervacky.innerHTML = "40,00/hod€";
    } else if (v.id == "tretiaRezervacka_button") {
        popisRezervacky.innerHTML = "Lakovanie, farbenie? nátery";
        cenaRezervacky.innerHTML = "25,00€/hod";
    } else if (v.id == "stvrtaRezervacka_button") {
        popisRezervacky.innerHTML = "Osobné konzultácie";
        cenaRezervacky.innerHTML = "15,00€/hod";
    }

    document.getElementById('overlay').classList.add('is-visible');
    document.getElementById('modal').classList.add('is-visible');
}));

document.getElementById('close-btn').addEventListener('click', function() {
    document.getElementById('overlay').classList.remove('is-visible');
    document.getElementById('modal').classList.remove('is-visible');
});
document.getElementById('overlay').addEventListener('click', function() {
    document.getElementById('overlay').classList.remove('is-visible');
    document.getElementById('modal').classList.remove('is-visible');
});