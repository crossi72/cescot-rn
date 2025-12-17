myButton = document.getElementById("btn_red_1");
myButton.addEventListener("click", function() {
	// seleziono tutti i div del primo gruppo
	change_divs_color("group_1", "red");
});

myButton = document.getElementById("btn_red_2");
myButton.addEventListener("click", function() {
	// seleziono tutti i div del secondo gruppo
	change_divs_color("group_2", "red");
});

myButton = document.getElementById("btn_red_3");
myButton.addEventListener("click", function() {
	// seleziono tutti i div del secondo gruppo
	change_divs_color("group_3", "red");
});

myButton = document.getElementById("btn_red_all");
myButton.addEventListener("click", function() {
	// seleziono tutti i div
	change_divs_color("group_1", "red");
	change_divs_color("group_2", "red");
	change_divs_color("group_3", "red");
});

myButton = document.getElementById("btn_blue_1");
myButton.addEventListener("click", function() {
	// seleziono tutti i div del primo gruppo
	change_divs_color("group_1", "blue");
});

myButton = document.getElementById("btn_blue_2");
myButton.addEventListener("click", function() {
	// seleziono tutti i div del secondo gruppo
	change_divs_color("group_2", "blue");
});

myButton = document.getElementById("btn_blue_3");
myButton.addEventListener("click", function() {
	// seleziono tutti i div del terzo gruppo
	change_divs_color("group_3", "blue");
});

myButton = document.getElementById("btn_blue_all");
myButton.addEventListener("click", function() {
	// seleziono tutti i div
	change_divs_color("group_1", "blue");
	change_divs_color("group_2", "blue");
	change_divs_color("group_3", "blue");
});

myButton = document.getElementById("btn_yellow_1");
myButton.addEventListener("click", function() {
	// seleziono tutti i div del primo gruppo
	change_divs_color("group_1", "yellow");
});

myButton = document.getElementById("btn_yellow_2");
myButton.addEventListener("click", function() {
	// seleziono tutti i div del secondo gruppo
	change_divs_color("group_2", "yellow");
});

myButton = document.getElementById("btn_yellow_3");
myButton.addEventListener("click", function() {
	// seleziono tutti i div del terzo gruppo
	change_divs_color("group_3", "yellow");
});

myButton = document.getElementById("btn_yellow_all");
myButton.addEventListener("click", function() {
	// seleziono tutti i div
	change_divs_color("group_1", "yellow");
	change_divs_color("group_2", "yellow");
	change_divs_color("group_3", "yellow");
});


function change_divs_color(div_class, bg_color) {
	// seleziono i div
	let myDivs = document.getElementsByClassName(div_class);
	change_divs_style(myDivs, bg_color);
}
	
function change_divs_style(divs, backgroundColor) {
		// ciclo su tutti i div e cambio il colore di sfondo
	for (let i = 0; i < divs.length; i++) {
		divs[i].style.backgroundColor = backgroundColor;
	}
}
