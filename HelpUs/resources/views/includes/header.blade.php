<nav class="navbar navbar-expand-md navbar-light">
	<a class="navbar-brand" href="{{ route('acoso.informacionGeneral') }}">
		<img src="{{ asset('img/Logo.png') }}" alt="HelpUs logo" class="img-solid">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="{{ route('acoso.informacionGeneral') }}">Home<span class="sr-only"></span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('organizaciones.infoGeneral') }}">Organizaciones</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('publicaciones.show_all') }}">Foro</a>
			</li>
		</ul>
	</div>
</nav>
<hr>

