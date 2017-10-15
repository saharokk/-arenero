<!DOCTYPE html>
<html>
<head>
<title>List of played songs</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>

<h1 style = "text-align:center;">List of recently played songs</h1>

<p1 style = "text-align:center;">Data recieved from prototype.</p1>

<table id = "tracklist" border = '1' align = 'center'>
    <tr>
	<th>Artist</th>
	<th>Sound title</th>
	<th>Label</th>
	<th>Duration</th>
	<th>Timestamp</th>
    </tr>
</table>

<div class="center">
<button class="but"  onclick="clearlist()">Clear list</button>
</div>




<script>

//$(document).ready(function(){

    //jQuery.support.cors = true;
function showtable()
{
    $.ajax(
    {
	type: "GET" ,
	url: "list.php" ,
	data: "{}" ,
	contentType: "application/json; charset=utf-8",
	dataType: "json",
	cache: true,
	success: function (data) {
	
	var trHTML = '<tr><th>Artist</th><th>Sound title</th><th>Label</th><th>Duration</th><th>Timestamp</th></tr>';
        
	$("#tracklist").html("");

	$.each(data.Artists, function (i, item) {
            
		trHTML += '<tr><td>' + item + '</td><td>' + data.Titles[i] + '</td><td>'
 			+ data.Lables[i] + '</td><td>' + data.Durations[i] + '</td><td>' 
			+ data.Timestamps[i] + '</td></tr>';
	});
        
	$('#tracklist').append(trHTML);
        
	},
        
	error: function (msg) {
            
		alert(msg.responseText);
        }
    });
}
 
function clearlist(){
   var sc = document.createElement("SCRIPT");
   sc.src="clearlist.php";
   document.body.appendChild(sc);
}

$(document).ready(function(){
	showtable();
	setInterval('showtable()', 5000)
});

</script>
 

</body>
</html>
