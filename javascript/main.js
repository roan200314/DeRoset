const BESTEL = document.getElementById("foto-bestel");
var ICE_NAME = document.getElementById("bestel-image");
var ICE_PRICE = document.getElementById("ijsPrijs");
const ITEMS = document.getElementById("items");
const WINKELWAGEN_WEERGAVE = document.getElementById("weergave")
const VERWIJDER_BUTTON = document.getElementById("buttondelete");
const BESTEL_BUTTON = document.getElementById("buttonBestel");
const BESTEL_BUTTONw = document.getElementById("buttonBestel2");
const RADIO_PLAATS = document.getElementById("radioPlaats");
const RADIO_PLAATS2 = document.getElementById("radioPlaats2");
const BEZORGEN = document.getElementById("birthday2");
const BEZORGEN2 = document.getElementById("bezorgen");
const BEZORGINGCHECK = document.getElementById("bezorgingCheck");
const AFHALINGCHECK = document.getElementById("afhalingCheck");
const ICEID = document.getElementById("iceId");
const SVDD = document.getElementById("svdd-bestel");


document.getElementById("radioPlaats").style.display = "none";
document.getElementById("radioPlaats2").style.display = "none";
document.getElementById("buttonBestel2").style.display = "none";
document.getElementById("birthday2").style.display = "none";
document.getElementById("bezorgen").style.display = "none";

document.getElementById("buttonBestel").onclick = function (){
    document.getElementById("items").style.display = "none";
    document.getElementById("buttonBestel").style.display = "none";
    document.getElementById("radioPlaats").style.display = "block";
    document.getElementById("radioPlaats2").style.display = "block";
    document.getElementById("buttonBestel2").style.display = "block";
};

document.getElementById("bezorgingCheck").onclick = function (){
  document.getElementById("bezorgen").style.display = "block";
  document.getElementById("birthday2").style.display = "block";
};
document.getElementById("afhalingCheck").onclick = function (){
  document.getElementById("bezorgen").style.display = "block";
  document.getElementById("birthday2").style.display = "block";
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

  function getIds() {
    let Ice = JSON.parse(localStorage.getItem("Ice"));
  
    Ice.forEach((item, index) => {
      if (index === Ice.length - 1) {
        ICEID.value += `${item.id}`;
        return;
      }
      ICEID.value += `${item.id},`;
    });
  }
  
  getIds();

VERWIJDER_BUTTON.addEventListener('click', () => {
    localStorage.setItem("Ice", "[]");

    window.location.reload();
    });