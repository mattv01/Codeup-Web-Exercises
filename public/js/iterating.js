(function(){
    "use strict";

    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
    var names = ["Matt", "Andrew", "Gavin", "Nick"];
    // TODO: Create a log statement that will log the number of elements in the names array.
    console.log(names.length);
    // TODO: Create log statements that will print each of the names array elements individually.
    console.log("'Console logging each name individually'");

    console.log(names[0]);
    console.log(names[1]);
    console.log(names[2]);
    console.log(names[3]);


    console.log("'Using a For Loop'");

    for (var i = 0; i < names.length; i++) {
    	console.log(names[i]);
    }


    console.log("'Using a forEach function'");

    names.forEach(function (element, index, array) {
    	console.log(element);
    });



})();