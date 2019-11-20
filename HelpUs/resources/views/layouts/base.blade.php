<!DOCTYPE html>
<html>
	<head>
		@include('includes.head')
	</head>
	<body class="container-principal">
		<header>
			@include('includes.header')
		</header>
		<div class="container">
			<div id="main" class="container">
				<!-- Inicia sección del contenido -->
				@yield('content')
				<!-- Termina sección del contenido -->
			</div>
		</div>
		@include('includes.footer')
	</body>
</html>
