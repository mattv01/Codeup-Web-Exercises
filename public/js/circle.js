(function() {
    "use strict";

    // create a circle object
    var circle = {
        radius: 3,

        getArea: function () {
            var area = (this.radius*this.radius)*(Math.PI);
            return area;

        },

        logInfo: function (doRounding) {
            if (doRounding == true) {
                console.log("Area of a circle with radius: " + this.radius + ", is: " + Math.round(this.getArea()));
            } else {
                console.log("Area of a circle with radius: " + this.radius + ", is: " + this.getArea());
            }
        }
    };

    console.log("Raw circle information");
    circle.logInfo(false);
    console.log("Circle information rounded to the nearest whole number");
    circle.logInfo(true);

    console.log("=======================================================");
    // Changed the radius of the circle to 5.
    circle.radius = 5;
    console.log("Raw circle information");
    circle.logInfo(false);
    console.log("Circle information rounded to the nearest whole number");
    circle.logInfo(true);

})();
