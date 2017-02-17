(function() {
"use strict";

var grade1 = 70;
var grade2 = 80;
var grade3 = 95;
var averageMinium = 80;
var grades = grade1 + grade2 + grade3;
var numberOfGrades = 3;
var gradesAverage = grades/numberOfGrades;
if (gradesAverage > averageMinium) {
	console.log("You're awesome");
} else {
	console.log("You need to practice more");
}







var georgeTotal = 320;
var camTotal = 180;
var ryanTotal = 250;
var discount = .35;
var Limit = 200;

if (georgeTotal > Limit) {
	var total = ((georgeTotal - Limit) * (1 - discount)) + Limit;
	console.log("George pays $" + total.toFixed(2) + " with discount");

} else {
	console.log("George pays $" + georgeTotal.toFixed(2) + " without discount");
}

if (camTotal > Limit) {
	var total = ((camTotal - Limit) * (1 - discount)) + Limit;
	console.log("Cameron pays $" + total.toFixed(2) + " with discount");
} else {
	console.log("Cameron pays $" + camTotal.toFixed(2) + " without discount");
}

if (ryanTotal > Limit) {
	var total = ((ryanTotal - Limit) * (1 - discount)) + Limit;
	console.log("Ryan pays $" + total.toFixed(2) + " with discount");
} else {
	console.log("Ryan pays $" + ryanTotal.toFixed(2) + " without discount");
}









var flipACoin = Math.floor(Math.random()* 2);
if (flipACoin != 1) {
	console.log("Buy a car");
} else if (flipACoin = 1){
	console.log("Buy a house");
}


var flipACoin = Math.floor(Math.random()* 2);
var message = (flipACoin) ? "Buy a car" : "Buy a house";
console.log(message);

})();