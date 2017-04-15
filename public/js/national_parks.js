(function() {
	"use strict";

	$("td#name").click(function(){
		$("body").css("background-image", "url('/img/parks/"+this.innerText+".jpg')");
		$("main").css({"opacity":"0"});
		$("h1").html(this.innerText).css("color","white");
		$("h1").css({"opacity":"0.5"});
		$("h1").css("background-color","black");
		$("#table").css({"background-color":"wheat"}); 
		$("h6").css({"opacity":"1"});
	});

	$("body").dblclick(function(){
		$("body").css("background-image", "none");
		$("h1").html("National Parks");
		$("h1").css("opacity","1");
		$("h1").css("color","black");
		$("h1").css("background-color","white");
		$("#table").css({"background-color":"white"});
		$("main").css({"opacity":"1"});
		$("h6").css({"opacity":"0"});
	});

})();
