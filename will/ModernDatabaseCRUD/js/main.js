$(document).ready(function() {
	
	$("#btnLoadDataWithAJAX").click(function() {
		alert("I'm going to get your data now!");
		$.getJSON("https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json")
				alert(data);
				$("#data").html(data.title);
		});
	});
	
});