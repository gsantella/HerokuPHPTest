$(document).ready(function() {
	
	$("#btnLoadDataWithAJAX").click(function() {
		alert("Retrieving Data Now . . .");
		$.getJSON("https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json", function(data) {
				$("#data").html(data.toSource());
		});
	});
		
});
