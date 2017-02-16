(function(){
    "use strict";

    // TODO: Create an array holding the names of the eight planets in our solar system in order, starting closest to the sun.
    var planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"];

    // function for logging the planets array
    function logPlanets() {
        console.log("Here is the list of planets:");
        console.log(planets);
        console.log("---- ---- ---- ----");
    }
    logPlanets();

    console.log('Adding "The Sun" to the beginning of the planets array.');
    logPlanets(planets.unshift("The Sun"));

    console.log('Adding "Pluto" to the end of the planets array.');
    logPlanets(planets.push("Pluto"));

    console.log('Removing "The Sun" from the beginning of the planets array.');
    logPlanets(planets.shift());

    console.log('Removing "Pluto" from the end of the planets array.');
    logPlanets(planets.pop());

    console.log('Finding and logging the index of "Earth" in the planets array.');
    console.log(planets.indexOf("Earth"));

    console.log('Using splice to remove the planet after "Earth".');
    var removed = planets.splice(planets.indexOf("Earth") + 1, 1)
    logPlanets(planets);

    console.log('Using splice to add back the planet after "Earth".');
    logPlanets(planets.splice(planets.indexOf("Earth") + 1, 0, removed.join('')));

    console.log("Reversing the order of the planets array.");
    logPlanets(planets.reverse());

    console.log("Sorting the planets array.");
    logPlanets(planets.sort());
})();