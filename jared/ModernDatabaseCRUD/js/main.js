$(document).ready(function() {
	
	$("#btnLoadDataWithAJAX").click(function() {
		alert("I'm going to get your data now!");
		$.ajax({
			type: 'POST',
			url: 'https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json',
			success: function(json) {
				$("#data").html(json);
			}
		});
	});
	
});
