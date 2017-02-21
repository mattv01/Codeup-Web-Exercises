(function() {
	"use strict";

	function typeInNumber1(){
			if (input2.value !== "+" && input2.value !== "-" && input2.value !== "*" && input2.value !== "/") {
				var inputNumber = document.getElementById("input1");
				inputNumber.value = input1.value + "1";
			}
			else if (input2.value == "+" || input2.value == "-" || input2.value == "*" || input2.value == "/"){
				var inputNumber = document.getElementById("input3");
				inputNumber.value = input3.value + "1";
			}	
	}
	var input = document.getElementById("num1");
	input.addEventListener("click", typeInNumber1);
	
	function typeInNumber2(){
			if (input2.value !== "+" && input2.value !== "-" && input2.value !== "*" && input2.value !== "/") {
				var inputNumber = document.getElementById("input1");
				inputNumber.value = input1.value + "2";
			}
			else if (input2.value == "+" || input2.value == "-" || input2.value == "*" || input2.value == "/"){
				var inputNumber = document.getElementById("input3");
				inputNumber.value = input3.value + "2";
			}	
	}
	var input = document.getElementById("num2");
	input.addEventListener("click", typeInNumber2);
	
	function typeInNumber3(){
			if (input2.value !== "+" && input2.value !== "-" && input2.value !== "*" && input2.value !== "/") {
				var inputNumber = document.getElementById("input1");
				inputNumber.value = input1.value + "3";
			}
			else if (input2.value == "+" || input2.value == "-" || input2.value == "*" || input2.value == "/"){
				var inputNumber = document.getElementById("input3");
				inputNumber.value = input3.value + "3";
			}	
	}
	var input = document.getElementById("num3");
	input.addEventListener("click", typeInNumber3);
	
	function typeInNumber4(){
			if (input2.value !== "+" && input2.value !== "-" && input2.value !== "*" && input2.value !== "/") {
				var inputNumber = document.getElementById("input1");
				inputNumber.value = input1.value + "4";
			}
			else if (input2.value == "+" || input2.value == "-" || input2.value == "*" || input2.value == "/"){
				var inputNumber = document.getElementById("input3");
				inputNumber.value = input3.value + "4";
			}	
	}
	var input = document.getElementById("num4");
	input.addEventListener("click", typeInNumber4);
	
	function typeInNumber5(){
			if (input2.value !== "+" && input2.value !== "-" && input2.value !== "*" && input2.value !== "/") {
				var inputNumber = document.getElementById("input1");
				inputNumber.value = input1.value + "5";
			}
			else if (input2.value == "+" || input2.value == "-" || input2.value == "*" || input2.value == "/"){
				var inputNumber = document.getElementById("input3");
				inputNumber.value = input3.value + "5";
			}	
	}
	var input = document.getElementById("num5");
	input.addEventListener("click", typeInNumber5);
	
	function typeInNumber6(){
			if (input2.value !== "+" && input2.value !== "-" && input2.value !== "*" && input2.value !== "/") {
				var inputNumber = document.getElementById("input1");
				inputNumber.value = input1.value + "6";
			}
			else if (input2.value == "+" || input2.value == "-" || input2.value == "*" || input2.value == "/"){
				var inputNumber = document.getElementById("input3");
				inputNumber.value = input3.value + "6";
			}	
	}
	var input = document.getElementById("num6");
	input.addEventListener("click", typeInNumber6);
	
	function typeInNumber7(){
			if (input2.value !== "+" && input2.value !== "-" && input2.value !== "*" && input2.value !== "/") {
				var inputNumber = document.getElementById("input1");
				inputNumber.value = input1.value + "7";
			}
			else if (input2.value == "+" || input2.value == "-" || input2.value == "*" || input2.value == "/"){
				var inputNumber = document.getElementById("input3");
				inputNumber.value = input3.value + "7";
			}	
	}
	var input = document.getElementById("num7");
	input.addEventListener("click", typeInNumber7);
	
	function typeInNumber8(){
			if (input2.value !== "+" && input2.value !== "-" && input2.value !== "*" && input2.value !== "/") {
				var inputNumber = document.getElementById("input1");
				inputNumber.value = input1.value + "8";
			}
			else if (input2.value == "+" || input2.value == "-" || input2.value == "*" || input2.value == "/"){
				var inputNumber = document.getElementById("input3");
				inputNumber.value = input3.value + "8";
			}	
	}
	var input = document.getElementById("num8");
	input.addEventListener("click", typeInNumber8);
	
	function typeInNumber9(){
			if (input2.value !== "+" && input2.value !== "-" && input2.value !== "*" && input2.value !== "/") {
				var inputNumber = document.getElementById("input1");
				inputNumber.value = input1.value + "9";
			}
			else if (input2.value == "+" || input2.value == "-" || input2.value == "*" || input2.value == "/"){
				var inputNumber = document.getElementById("input3");
				inputNumber.value = input3.value + "9";
			}	
	}
	var input = document.getElementById("num9");
	input.addEventListener("click", typeInNumber9);
	
	function typeInNumber0(){
			if (input2.value !== "+" && input2.value !== "-" && input2.value !== "*" && input2.value !== "/") {
				var inputNumber = document.getElementById("input1");
				inputNumber.value = input1.value + "0";
			}
			else if (input2.value == "+" || input2.value == "-" || input2.value == "*" || input2.value == "/"){
				var inputNumber = document.getElementById("input3");
				inputNumber.value = input3.value + "0";
			}	
	}
	var input = document.getElementById("num0");
	input.addEventListener("click", typeInNumber0);



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
