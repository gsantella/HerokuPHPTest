$(document).ready(function()
{
	
	$("#btnLoadDataWithAJAX").click(function()
	{
		alert("Retrieving Data Now . . . ");
		$.ajax({
			type: 'POST',
			url: 'https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json',
			success: function(json)
			{
				$("#data").html(json);
			}
			
		});
	});
	
});