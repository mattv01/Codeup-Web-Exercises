(function() {
	"use strict";

	$("td#name").click(function(){
		$("main").css({"display":"none"});
		$("body").css("background-image", "url('/img/parks/"+this.innerText.split(' ').join('_')+".jpg')");
		$("h1").html(this.innerText).css({"color":"white", "opacity":"0.5", "background-color":"black"});
		$("h6").css({"display":"block"});
	});

	$("html").dblclick(function(){
		$("main").css({"display":"block"});
		$("body").css("background-image", "none");
		$("h1").html("National Parks").css({"opacity":"1", "color":"black", "background-color":"white"});
		$("h6").css({"display":"none"});
	});

})();
