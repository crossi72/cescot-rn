/*	
quando l'utente clicca sul pulsante i div cambiano colore di sfondo in rosso
 */
// seleziono il pulsante
let myButton = document.getElementById("btn_red");

function change_divs_style(backgroundColor) {
	// seleziono tutti i div
	let divs = document.getElementsByClassName("box");
	// ciclo su tutti i div e cambio il colore di sfondo
	for (let i = 0; i < divs.length; i++) {
		divs[i].style.backgroundColor = backgroundColor;
	}
}

//aggiungo l'evento click
myButton.addEventListener("click", function() {
	change_divs_style("red");
});

myButton = document.getElementById("btn_yellow");

//aggiungo l'evento click
myButton.addEventListener("click", function() {
	change_divs_style("yellow");
});

myButton = document.getElementById("btn_blu");

//aggiungo l'evento click
myButton.addEventListener("click", function() {
	change_divs_style("blue");
});

myButton = document.getElementById("btn_green");

//aggiungo l'evento click
myButton.addEventListener("click", function() {
	change_divs_style("green");
});

myButton = document.getElementById("btn_orange");

//aggiungo l'evento click
myButton.addEventListener("click", function() {
	change_divs_style("orange");
});

myButton = document.getElementById("btn_alterna");

//aggiungo l'evento click
myButton.addEventListener("click", function() {
	// seleziono tutti i div
	let divs = document.getElementsByClassName("box");
	// ciclo su tutti i div e cambio il colore di sfondo
	for (let i = 0; i < divs.length; i+=3) {
		divs[i].style.backgroundColor = "red";
	}
	for (let i = 1; i < divs.length; i+=3) {
		divs[i].style.backgroundColor = "yellow";
	}
	for (let i = 2; i < divs.length; i+=3) {
		divs[i].style.backgroundColor = "blue";
	}

});
