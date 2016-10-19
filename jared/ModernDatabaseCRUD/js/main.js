$(document).ready(function() {
	
	$("#btnLoadDataWithAJAX").click(function() {
		alert("I'm going to get your data now!");
		
		$.getJSON('https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json', function(data) {
				alert(data.title);
				$("#data").html(data.title);
		});
	});
	
	$("#btnInsertDataWithAJAX").click(function() {
		alert($("#txtFirstName").val() );
		
		$.ajax({
			type: "POST",
			url: "inc/insertData.php",
			data: "firstName=" + $("#txtFirstName").val(),
			success: function() {
				$("#insertStatus").html("successful on inserting one record!")
			}
		})
	
	});
	
	$("#btnDeleteDataWithAJAX").click(function(){
		
		$.ajax({
			type: "POST",
			url: "inc/deleteData.php",
			data: "id=" + $("#txtId").val(),
			success: function(result) {
				$("#deleteStatus").html(result);	
		})
	});
	
});
	
