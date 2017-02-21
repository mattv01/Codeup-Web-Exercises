(function() {
	"use strict";

	/////////////////////// TYPES IN NUMBERS ///////////////////////////

	function typeInNumber() {
		var leftDisplay = document.getElementById("input1");
		var rightDisplay = document.getElementById("input3");
		if (input2.value == "" && leftDisplay != ""){
			leftDisplay.value += this.innerText;	
		} else {
			rightDisplay.value += this.innerText;
		}
	}
	var numbers = document.getElementsByClassName("number");

	for (var i = 0; i < numbers.length; i++) {
		numbers[i].addEventListener("click", typeInNumber);
	}
	


	///////////////////// TYPES IN OPERATORS /////////////////////////

	function typeInOperator() {
		var opDisplay = document.getElementById("input2");
		opDisplay.value = this.innerText;	
	}
	var operators = document.getElementsByClassName("operator");

	for (var i = 0; i < operators.length; i++) {
		operators[i].addEventListener("click", typeInOperator);
	}



	///////////////////// CALCULATES MATH /////////////////////////
	
	function calculateMath(){
		var input2 = document.getElementById("input2");
		switch (input2.value) {
			case input2.value = "+":
				var math = (parseInt(input1.value))+(parseInt(input3.value));
				input1.value = math;
				input3.value = "";
			break;
			case input2.value = "-":
				var math = (input1.value)-(input3.value);
				input1.value = math;
				input3.value = "";
			break;
			case input2.value = "*":
				var math = (input1.value)*(input3.value);
				input1.value = math;
				input3.value = "";
			break;
			case input2.value = "/":
				var math = (input1.value)/(input3.value);
				input1.value = math;
				input3.value = "";
			break;
		}
	}
	var equals = document.getElementById("equals");
	equals.addEventListener("click", calculateMath);
	


	///////////////////// CLEARS CALCULATOR /////////////////////////

	function clearCalculator(){
		var inputs = document.getElementById("input1");
		var inputs2 = document.getElementById("input2");
		var inputs3 = document.getElementById("input3");
		inputs.value = "";
		inputs2.value = "";
		inputs3.value = "";
	}
	var clearCalc = document.getElementById("clearCalc");
	clearCalc.addEventListener("click", clearCalculator);

})();
