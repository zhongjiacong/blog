$(document).ready(function(){
	$("body").fadeIn("slow");
	
	$("#avatar").animate({top:"0px"},800,function(){});
	
	setInterval(titleFont, 5000);
});

function arrPos(element, arr) {
	for(var i = 0; i < arr.length; i++) {
		if("\""+arr[i]+"\"" == element) {
			return i;
			break;
		}
	}
}

function titleFont() {
	var fontArr = new Array("Script MT Bold", "MV Boli", "Goudy Old Style", "Edwardian Script ITC",
		"Curlz MT", "Comic Sans MS", "Bradley Hand ITC");
	var currFont = $("#blogtitle").css("font-family").toString();
	var nextFontNum = (Number(arrPos(currFont, fontArr)) + 1) % fontArr.length;
	$("#blogtitle").fadeOut(500,function(){
		$("#blogtitle").css({"font-family":"\""+fontArr[nextFontNum]+"\""});
		$("#blogtitle").fadeIn(1500);
	});
}
