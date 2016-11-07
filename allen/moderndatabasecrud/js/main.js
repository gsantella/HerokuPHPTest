

$(document).ready(function() {
	$('#btnLoadDataWithAJAX').click(function() {
		$.getJSON('https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json',
			function(data) { 
				alert(data.title);
				$('#data').html(data.title);
		});
	});
	
	$('#btnInsertDataWithAJAX').click(function() {
		$.ajax({
			type: "POST",
			url: "inc/insertData.php",
			data: "firstName="+$('#txtFirstName').val(),
			success: function() {
				$("#insertStatus").html("Successful on inserting one record!");
			}
		});
	});
	
	$('#btnDeleteDataWithAJAX').click(function() {
		$.ajax({
			type: "POST",
			url: "inc/deleteData.php",
			data: "id="+$('#txtId').val(),
			success: function(result) {
				$("#deleteStatus").html(result);
			}
		});
	});
});