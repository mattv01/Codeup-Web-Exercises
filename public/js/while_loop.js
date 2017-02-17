(function() {
"use strict";

var coneInventory = Math.floor(Math.random() * 50) + 50;

do {
	var conesToSell = Math.floor(Math.random() * 5) + 1;

	if (conesToSell <= coneInventory) {
		console.log(conesToSell + " cones sold...");
		coneInventory = coneInventory - conesToSell;
	} else {
		console.log("Can't sell you " + conesToSell + " cones I only have " + coneInventory + "...");
	}

} while (coneInventory > 0);

console.log("Yay! I sold them all!");
})();