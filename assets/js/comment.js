$(document).ready(function(){
	loadMsg(1);
});

function loadMsg(page) {
	$.ajax({
		type: "POST",
		url: "comment/list",
		data: {page : page},
		//dataType: "json",
		beforeSend: function(){},
		success: function(result){
			$("#msgpanel div:last-child").html(result);
		}
	});
}
