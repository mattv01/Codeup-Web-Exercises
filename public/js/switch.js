"use strict";

var total = 60;
var luckyNumber = Math.floor(Math.random()* 6);
switch (luckyNumber) {
	case luckyNumber = 0:
		var discount = 0;
		var finalTotal = total * (1 - discount);
		console.log("Your lucky number was " + luckyNumber + "...");
		console.log("You get no discount...");
		console.log("Your total is $" + total + ".");
		break;
	case luckyNumber = 1:
		var discount = .10;
		var finalTotal = total * (1 - discount);
		console.log("Your lucky number was " + luckyNumber + ".");
		console.log("You get a 10% discount!");
		console.log("Your new total is $" + finalTotal + "!");
		break;
	case luckyNumber = 2:
		var discount = .25;
		var finalTotal = total * (1 - discount);
		console.log("Your lucky number was " + luckyNumber + ".");
		console.log("You get a 25% discount!");
		console.log("Your new total is $" + finalTotal + "!");
		break;
	case luckyNumber = 3:
		var discount = .35;
		var finalTotal = total * (1 - discount);
		console.log("Your lucky number was " + luckyNumber + ".");
		console.log("You get a 35% discount!");
		console.log("Your new total is $" + finalTotal + "!");
		break;
	case luckyNumber = 4:
		var discount = .50;
		var finalTotal = total * (1 - discount);
		console.log("Your lucky number was " + luckyNumber + ".");
		console.log("You get a 50% discount!!");
		console.log("Your new total is $" + finalTotal + "!!");
		break;
	case luckyNumber = 5:
		var discount = 1;
		var finalTotal = total * (1 - discount);
		console.log("Your lucky number was " + luckyNumber + "!");
		console.log("You get everything free!!");
		console.log("Your new total is $" + finalTotal + "!!!");
		break;
}



var month = (Math.floor(Math.random()* 12)) + 1;
switch (month) {
	case month = 1:
		console.log("January");
		break;
	case month = 2:
		console.log("February");
		break;
	case month = 3:
		console.log("March");
		break;
	case month = 4:
		console.log("April");
		break;
	case month = 5:
		console.log("May");
		break;
	case month = 6:
		console.log("June");
		break;
	case month = 7:
		console.log("July");
		break;
	case month = 8:
		console.log("August");
		break;
	case month = 9:
		console.log("September");
		break;
	case month = 10:
		console.log("October");
		break;
	case month = 11:
		console.log("November");
		break;
	case month = 12:
		console.log("December");
		break;
}

