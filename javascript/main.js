const BESTEL = document.getElementById("foto-bestel");
const ICE_NAME = document.getElementById("bestel-image");
const ITEMS = document.getElementById("items");
const WINKELWAGEN_WEERGAVE = document.getElementById("weergave")

if (!localStorage.getItem("Ice")) {
    localStorage.setItem("Ice", "[]"); // [] is de standaard waarde omdat als een array moet functioneren.
}
winkelwagen()
if (BESTEL) {

    BESTEL.addEventListener('click', () => {
        // Object aanmaken met de gegevens uit de velden.
        let Ice = {
            name: ICE_NAME.value,
        };
    
        // Pak de huidige notitie object en zet om in leesbaar JSON formaat.
        let huidigeOpslag = JSON.parse(localStorage.getItem("Ice"));
    
        // Notities localstorage is een array formaat en we voegen een nieuwe notitie toe.
        huidigeOpslag.push(Ice);
    
        // huidigeOpslag heeft nu een nieuwe notitie in geheugen en schrijven de "notities" item over.
        localStorage.setItem("Ice", JSON.stringify(huidigeOpslag));
    });
}

function zetIn(name) {
    let Ice = {
      name: name,
    };
  
    // Pak de huidige notitie object en zet om in leesbaar JSON formaat.
    let huidigeOpslag = JSON.parse(localStorage.getItem("Ice"));
  
    // Notities localstorage is een array formaat en we voegen een nieuwe notitie toe.
    huidigeOpslag.push(Ice);
  
    // huidigeOpslag heeft nu een nieuwe notitie in geheugen en schrijven de "notities" item over.
    localStorage.setItem("Ice", JSON.stringify(huidigeOpslag));
  }
  
  function haalCart() {
    let Ice = JSON.parse(localStorage.getItem("Ice"));
  
    for (let i = 0; i < Ice.length; i++) {
        ITEMS.innerHTML += "<h6 onClick='openProduct(" + i + ")'>" + Ice[i].name + "</h6>";
    }
  }

/**
 * Open de notitie bij index die in localStorage zit.
 * @param {Number} index 
 */
 function winkelwagen() {
    let Ice = JSON.parse(localStorage.getItem("Ice"));

    for (let i = 0; i < Ice.length; i++) {
        ITEMS.innerText += Ice[i].name;
    }
    
}