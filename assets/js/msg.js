$(document).ready(function(){
	$("body").fadeIn("slow");
	
	$("#msgarea").keyup(function(){
		if($("#msgarea").val() != "")
			$("#msgbtn").removeAttr("disabled");
	});
	
	$("#msgbtn").click(function(){
		var content = $("#msgarea").val();
		$.ajax({
			type: "POST",
			url: "protected/msg.php",
			data: {content: content},
			dataType: "json",
			beforeSend: function(){},
			success: function(result) {
				if(result.state == "succeed")
					$("#msgform").after("<article>"+content+"</article>");
					//$("#msgarea").val();
					//window.location.reload();
			}
		});
	});
});
