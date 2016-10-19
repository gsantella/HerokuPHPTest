$(document).ready(function() {

	$("#btnLoadDataWithAJAX").click(function() {
		$.getJSON("https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json", function(data) {
				alert(data.title);
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
			}
		})

	});

	$("#btnDeleteDataWithAJAX").click(function() {

		$.ajax({
			type: "DELETE",
			url: "inc/deleteData.php",
			data: "id=" + $("#txtId").val(),
			success: function() {
				$("#deleteStatus").html("Successful on deleting one record!");
			}
		})

	});



});
