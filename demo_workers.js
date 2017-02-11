var i = 0;

function timedCount() {
    i = i + 1;
    postMessage(i);
    setTimeout("timedCount()",500);
}

timedCount();
if(typeof(EventSource)!=="undefined") {
	//create an object, passing it the name and location of the server side script
	var eSource = new EventSource("send_sse.php");
	console.log(eSource);
	//detect message receipt
	eSource.onmessage = function(event) {
		//write the received data to the page
		postMessage(event.data);
	};
}
else {
	postMessage("Whoops! Your browser doesn't receive server-sent events.");
}