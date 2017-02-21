(function() {
	"use strict";

	/////////////////////// TYPES IN NUMBERS ///////////////////////////

	function typeInNumber() {
		var leftDisplay = document.getElementById("input1");
		var rightDisplay = document.getElementById("input3");
		if (input2.value !== "+" && input2.value !== "-" && input2.value !== "*" && input2.value !== "/"){
			leftDisplay.value += this.innerText;	
		} else if (input2.value == "+" || input2.value == "-" || input2.value == "*" || input2.value == "/") {
			rightDisplay.value += this.innerText;
		}
	}
	var numbers = document.getElementsByClassName("number");

	for (var i = 0; i < numbers.length; i++) {
		numbers[i].addEventListener("click", typeInNumber);
	}
	


	///////////////////// TYPES IN OPERATORS /////////////////////////

	function typeOperator1(){
			var inputOperator = document.getElementById("input2");
			inputOperator.value = "+";
	}
	var inputOp = document.getElementById("op1");
	inputOp.addEventListener("click", typeOperator1);
	
	function typeOperator2(){
			var inputOperator = document.getElementById("input2");
			inputOperator.value = "-";
	}
	var inputOp = document.getElementById("op2");
	inputOp.addEventListener("click", typeOperator2);
	
	function typeOperator3(){
			var inputOperator = document.getElementById("input2");
			inputOperator.value = "*";
	}
	var inputOp = document.getElementById("op3");
	inputOp.addEventListener("click", typeOperator3);
	
	function typeOperator4(){
			var inputOperator = document.getElementById("input2");
			inputOperator.value = "/";
	}
	var inputOp = document.getElementById("op4");
	inputOp.addEventListener("click", typeOperator4);
	


	///////////////////// CALCULATES MATH /////////////////////////
	
	function calculateMath(){
		var input2 = document.getElementById("input2");
		switch (input2.value) {
			case input2.value = "/":
				var math = (input1.value)/(input3.value);
				input1.value = math;
				input3.value = "";
			break;
			case input2.value = "*":
				var math = (input1.value)*(input3.value);
				input1.value = math;
				input3.value = "";
			break;
			case input2.value = "-":
				var math = (input1.value)-(input3.value);
				input1.value = math;
				input3.value = "";
			break;
			case input2.value = "+":
				var math = (parseInt(input1.value))+(parseInt(input3.value));
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
		inputs.value = " ";
		inputs2.value = " ";
		inputs3.value = " ";
	}
	var clearCalc = document.getElementById("clearCalc");
	clearCalc.addEventListener("click", clearCalculator);

})();
