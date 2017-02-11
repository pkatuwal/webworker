<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id="serverData">Here is where the server sent data will appear</div>


<script type="text/javascript">
//check for browser support
if(typeof(EventSource)!=="undefined") {
	//create an object, passing it the name and location of the server side script
	var eSource = new EventSource("send_sse.php");
	console.log(eSource);
	//detect message receipt
	eSource.onmessage = function(event) {
		//write the received data to the page
		document.getElementById("serverData").innerHTML = event.data;
	};
}
else {
	document.getElementById("serverData").innerHTML="Whoops! Your browser doesn't receive server-sent events.";
}
</script>
</body>
</html>