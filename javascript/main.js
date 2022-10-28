const BESTEL = document.getElementById("foto-bestel");
var ICE_NAME = document.getElementById("bestel-image");
var ICE_PRICE = document.getElementById("ijsPrijs");
const ITEMS = document.getElementById("items");
const WINKELWAGEN_WEERGAVE = document.getElementById("weergave")
const VERWIJDER_BUTTON = document.getElementById("buttondelete");
const BESTEL_BUTTON = document.getElementById("buttonBestel")

document.getElementById("buttonBestel").onclick = function (){
    document.getElementById("items").style.display = "none";
    document.getElementById("buttonBestel").style.display = "none";
};


if (!localStorage.getItem("Ice")) {
    localStorage.setItem("Ice", "[]"); // [] is de standaard waarde omdat als een array moet functioneren.
}


function zetIn(name, prijs , id) {
    let notitie = {
      name: name,
      prijs: prijs,
      id: id,
    };
  
    // Pak de huidige notitie object en zet om in leesbaar JSON formaat.
    let huidigeOpslag = JSON.parse(localStorage.getItem("Ice"));
  
    // Notities localstorage is een array formaat en we voegen een nieuwe notitie toe.
    huidigeOpslag.push(notitie);
  
    // huidigeOpslag heeft nu een nieuwe notitie in geheugen en schrijven de "notities" item over.
    localStorage.setItem("Ice", JSON.stringify(huidigeOpslag));
  }
  
  function haalCart() {
    let Ice = JSON.parse(localStorage.getItem("Ice"));
  
    for (let i = 0; i < Ice.length; i++) {
        ITEMS.innerHTML += 
        "<p> name: " + Ice[i].name + "<br> Price: €" + Ice[i].prijs + "<br> " + Ice[i].id + "</p>";
    }
  }
  haalCart();



VERWIJDER_BUTTON.addEventListener('click', () => {
    localStorage.setItem("Ice", "[]");

    window.location.reload();
    });