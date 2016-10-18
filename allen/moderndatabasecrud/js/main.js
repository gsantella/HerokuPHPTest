

$(document).ready(function() {
	$('#btnLoadDataWithAJAX').click(function() {
		$.getJSON('https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json',
			function(data) { 
				alert(data.toSource());
				$('#data').html(data.toSource());
		});
	});
});