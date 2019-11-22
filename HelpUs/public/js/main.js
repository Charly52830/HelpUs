//Funciones personales.

function displayIframe() {	
	showBot = "<p><iframe src=\"bot\" height=\"400\" width=\"300\" ></iframe></p><button type=\"button\" class=\"btn btn-info\" onclick=\"hideIframe()\">Oculta a Perry</button>"
	document.getElementById("botIFrame").innerHTML = showBot;
}

function hideIframe() {
	document.getElementById("botIFrame").innerHTML = "<button type=\"button\" class=\"btn btn-info\" onclick=\"displayIframe()\">Habla con Perry</button>";
}
