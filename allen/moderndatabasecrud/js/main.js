

$(document).ready(function() {
	$('#btnLoadDataWithAJAX').click(function() {
		$.ajax({
			type: 'POST',
			url: 'https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json',
			success: function(json) { 
				$('#data').html(json);
			}
		});
	});
});