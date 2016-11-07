$(document).ready(function() {

	$("#btnLoadDataWithAJAX").click(function() {
		$.getJSON("https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json", function(data) {
				$("#data").html(data.title);
		});

		var items = [];
		$.each( data.values, function( key, val ) {
			items.push( "<li id='" + key + "'>" + val + "</li>" );
		});

		$( "<ul/>", {
			"class": "my-new-list",
			html: items.join( "" )
		}).appendTo( "#data" );

	});

	$("#btnInsertDataWithAJAX").click(function() {

		$.ajax({
			type: "POST",
			url: "inc/insertData.php",
			data: "firstName=" + $("#txtFirstName").val(),
			success: function() {
				$("#insertStatus").html("Successful on inserting one record!");
				$("#txtFirstName").val().appendTo("#list");
			}
		})

	});

	$("#btnDeleteDataWithAJAX").click(function() {
		alert("Item to Delete: " + $("#txtId").val());
		$.ajax({
			type: "POST",
			url: "inc/deleteData.php",
			data: "id=" + $("#txtId").val(),
			success: function(result) {
				$("#deleteStatus").html(result);
			}
		})

	});



});
