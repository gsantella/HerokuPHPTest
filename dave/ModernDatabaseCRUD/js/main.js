$(document).ready(function() {
	$("#btnLoadDataWithAJAX").click(function() {
		alert("Retrieving Data Now . . .");
		$.getJSON("https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json", function(data) {
				$("#data").html(data.title);
				
		});
	});	
	
	$("#btnInsertDataWithAJAX").click(function() {
		
		$.ajax({
			type: "POST",
			url: "inc/insertData.php",
			data: "firstName=" + $("#txtFirstName").val(),
			success: function()
			{
				$("#insertStatus").html("Successfully Added 1 Record . . . ");
			}
		})
	});	
});


