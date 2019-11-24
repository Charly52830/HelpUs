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
				<nav class="navbar navbar-light bg-light fixed-top">
					<a class="navbar-brand" href="#">Perry</a>
				</nav>
			</div>
			<div class="row bot-content">
				<div id="chat-bot"></div>
			</div>
			<div class="row">
				<hr>
				<div class="container-fluid fixed-bottom bot-footer">					
					<div class="row row-bot">
						<div class="col-8">
							<textarea class="form-control" name="textarea-message" id="textarea-message" rows="1"></textarea>
						</div>
						<div class="col-4">
							<button type="button" class="btn btn-primary text-right" onclick="writeMessage()">Enviar</button>
						</div>
					</div>
				</div>
			</div> <!-- Fin row -->
		</div>		
		<footer>
			<!-- Codigo fuente de JQuery -->
			<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
		
			<!-- Estilos de bootstrap -->
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			
			<!-- Funciones personales-->
			<script src="{{ asset('js/main.js') }}"></script>
			
		</footer>
	</body>
	
</html>
