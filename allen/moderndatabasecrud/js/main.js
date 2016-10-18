

$(document).ready(function() {
	$('#btnLoadDataWithAJAX').click(function() {
		$.getJSON('https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json',
			function(data) { 
				alert(data.title);
				$('#data').html(data.title);
		});
	});
	
	$('#btnInsertDataWithAJAX').click(function() {
		alert( $('#txtFirstName').val() );
		
		$.ajax({
			type: "POST",
			url: "../inc/insertData.php",
			data: "firstName="+$('#txtFirstName').val(),
			success: function() {
				$("#insertStatus").html("Successful on inserting one record!");
			}
		});
	});
});