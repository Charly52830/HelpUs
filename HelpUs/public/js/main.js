//Funciones personales.

function sendMessage(message) {
	console.log(message);
	jQuery.ajax({
		url: "/mensaje",
		method: 'post',
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		data: {
			mensaje: message
		},
		succes: function(result) {
			console.log("entra aqui");
			console.log(result);
		},
		error: function(error) {
			console.log("Ocurrio un error");
		}
	});
}

function writeMessage() {
	var message = document.getElementById("textarea-message").value;
	console.log("jeje");
	sendMessage(message);
}

function displayIframe() {	
	showBot = "<p><iframe src=\"start_bot\" height=\"400\" width=\"300\" ></iframe></p><button type=\"button\" class=\"btn btn-info\" onclick=\"hideIframe()\">Oculta a Perry</button>"
	document.getElementById("botIFrame").innerHTML = showBot;
}

function hideIframe() {
	document.getElementById("botIFrame").innerHTML = "<button type=\"button\" class=\"btn btn-info\" onclick=\"displayIframe()\">Habla con Perry</button>";
}
