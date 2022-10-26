const BESTEL = document.getElementById("foto-bestel");
const ICE_NAME = document.getElementById("bestel-image");



BESTEL.addEventListener('click', () => {
    // Object aanmaken met de gegevens uit de velden.
    let bestellen = {
        name: ICE_NAME.value,
    };

    // Pak de huidige notitie object en zet om in leesbaar JSON formaat.
    let huidigeOpslag = JSON.parse(localStorage.getItem("Ice"));

    // Notities localstorage is een array formaat en we voegen een nieuwe notitie toe.
    huidigeOpslag.push(Ice);

    // huidigeOpslag heeft nu een nieuwe notitie in geheugen en schrijven de "notities" item over.
    localStorage.setItem("Ice", JSON.stringify(huidigeOpslag));

});

/**
 * Open de notitie bij index die in localStorage zit.
 * @param {Number} index 
 */
 function openNotitie(index) {
    let notities = JSON.parse(localStorage.getItem("Ice"));
    NOTITIE_WEERGAVE_TITEL.innerText = notities[index].titel;
    NOTITIE_WEERGAVE_CONTENT.innerText = notities[index].content;
}