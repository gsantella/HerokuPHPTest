$(document).ready(function() {
	
	$("#btnLoadDataWithAJAX").click(function() 
		alert("I'm going to get your data now, hold on, and don't rush me!")
		$.ajax({
			type:'post',
			url:'https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json',
			success: function(json) {
				$("#data").html(json);
			}
		)};
	
	});
	
	
	
	
});