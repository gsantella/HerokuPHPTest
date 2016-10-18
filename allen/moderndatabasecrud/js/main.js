

$(document).ready(function() {
	$('#btnLoadDataWithAJAX').click(function() {
		$.getJson('https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json',
			function(data) { 
				$('#data').html(data);
		});
	});
});