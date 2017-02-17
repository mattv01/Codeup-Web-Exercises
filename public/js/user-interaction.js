(function() {
"use strict";

var name; 
do {
	name = prompt("What is your name?");
	name = name.trim();
} while (name == "" || name == "null" || !isNaN(name));

alert("Hello " + name + "!");


var likesPizza = confirm("Do you like pizza?");
if (likesPizza == true) {
	alert("Me too!");
} else {
	alert("What?! You're missing out!");
}
})();