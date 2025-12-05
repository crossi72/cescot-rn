/*	
quando l'utente clicca sul pulsante i div cambiano colore di sfondo in rosso
 */
// seleziono il pulsante
let myButton = document.getElementById("myButton");

//aggiungo l'evento click
myButton.addEventListener("click", function() {
	// seleziono tutti i div
	let divs = document.getElementsByClassName("box");
	// ciclo su tutti i div e cambio il colore di sfondo
	for (let i = 0; i < divs.length; i++) {
		divs[i].style.backgroundColor = "red";
	}
	});
