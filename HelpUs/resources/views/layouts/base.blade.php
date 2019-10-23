<!DOCTYPE html>
<html>
	<head>
		@include('includes.head')
	</head>
	<body>
		<div class="container">
			<header>
				@include('includes.header')
			</header>
			<div id="main" class="row">
				<!-- Inicia sección del contenido -->
				@yield('content')
				<!-- Termina sección del contenido -->
			</div>
			<footer class="row">
				@include('includes.footer')
			</footer>
		</div>
	</body>
</html>
