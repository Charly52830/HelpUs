<!DOCTYPE html>
<html>
	<head>
		<!-- Estilos de Bootrstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			
		<!-- Códigos personales -->
		<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	
		<meta name="csrf-token" content="{{ csrf_token() }}" />
	
	</head>
	<body>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-light fixed-top" style="background-color: #e3f2fd;">
					<a class="navbar-brand" href="#">Perry</a>
				</nav>
			</div>
			<div class="row bot-content">
				<div class="container" id="chat-bot">
					
					
				</div>
				
			</div>
			<div class="row">
				<hr>
				<div class="container-fluid fixed-bottom bot-footer">
					<form action="{{ route('bot.respuesta') }}" method="post">
					@csrf
						<div class="row row-bot">
							<div class="col-8">
								<textarea class="form-control" rows="1" placeholder="Escribe tu mensaje aquí" name="pregunta" id="pregunta"></textarea>
							</div>
							<div class="col-4">
								<button type="submit" id="ajaxSubmit" class="btn btn-primary text-right">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div> <!-- Fin row -->
		</div>		
		<footer>
			<!-- Codigo fuente de JQuery -->
			<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
		
			<!-- Estilos de bootstrap -->
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			
			<!-- Comunicación con el bot -->
			<script>
				jQuery(document).ready( function() {
					jQuery('#ajaxSubmit').click( function(e) {
						e.preventDefault();
						
						var envia_mensaje = "<div class=\"container-fluid text-right\"><div class=\"card text-white bg-success mb-3\" style=\"max-width: 18rem;\"><div class=\"card-body\"><p class=\"card-text\">"+jQuery('#pregunta').val()+"</p></div></div></div>";
						document.getElementById('chat-bot').innerHTML+= envia_mensaje;
						
						jQuery.ajax( {
							url: "/mensaje",
							method: 'post',
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							},
							data: {
								pregunta: jQuery('#pregunta').val(),
							},
							success: function(result) {
							
								var mensaje_nuevo = "<div class=\"card text-white bg-info mb-3\" style=\"max-width: 18rem;\"><div class=\"card-body\"><p class=\"card-text\">"+result.respuesta+"</p></div></div>";
								document.getElementById('chat-bot').innerHTML+= mensaje_nuevo;
							},
							error: function(error) {
								var mensaje_nuevo = "<div class=\"card text-white bg-danger mb-3\" style=\"max-width: 18rem;\"><div class=\"card-body\"><p class=\"card-text\">Ocurrió un error, inténtalo de nuevo más tarde.</p></div></div>";
								document.getElementById('chat-bot').innerHTML+= mensaje_nuevo;
							}
						});
					});
				});
			</script> <!-- Termina comunicación con el bot -->
			
		</footer>
	</body>
	
</html>
