// // variable die alle content van de modalevensters krijgt
// const modaalvenster = document.querySelectorAll('.modaalvenster');
//
// // alle modaal content verwijderen uit document
// for(let i=0; i<modaalvenster.length; i++){
//     let modaalPunt = modaalvenster[i];
//     modaalPunt.parentNode.removeChild(modaalPunt);
// }
//
// // nodelist van alle modale knoppen, die inhoud moet oproepen
// const ModaalButtons = document.querySelectorAll('.ModaalBut');
// const modButtonsArray = [];
//
// // toekomstige node-elementen aanmaken in variabelen
// let modaalBack       = document.createElement('div');
// modaalBack.className = 'modaal-achtergrond';
// let modaal           = document.createElement('div');
// modaal.className     = 'modaal';
// let closer           = document.createElement('button');
// closer.className     = 'closer';
// closer.innerHTML     = '&#x00D7;';
//
// // sluit het module vensters
// const modaalCloser = () =>{
//     modaal.innerHTML = '';
//     modaalBack.innerHTML = '';
//     document.body.removeChild(modaalBack);
// };
//
// // sluitknop event sluiten afgeschreven
// closer.addEventListener('click', modaalCloser);
//
// // modale content aan DOM toevoegen
// const voegInhoudToe = (event) =>{
//     const counter = modButtonsArray.indexOf(event.target);
//     console.log(counter);
//     modaal.appendChild(closer);
//     modaal.appendChild(modaalvenster[counter]);
//     modaalBack.appendChild(modaal);
//     document.body.appendChild(modaalBack);
// };
//
// // alle modale knoppen in een array plaatsen, eventlistener koppelen
// for(let i=0; i<ModaalButtons.length; i++){
//     // toevoegen aan de Array
//     modButtonsArray.push(ModaalButtons[i]);
//     // klik eventlistener toevoegen
//     ModaalButtons[i].addEventListener('click', voegInhoudToe);
// }
