$(document).ready(function() {
	
	$("#btnLoadDataWithAJAX").click(function() {
		alert("I'm going to get your data now, hold on, and don't rush me!");
	$.getJSON('https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json',function(data){
				alert(data.title);
				$("#data").html(data.title);
		)};
	
	});
	
	
	
	
});