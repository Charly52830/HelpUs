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
			@guest
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">Entrar</a>
				</li>
				@if (Route::has('register'))
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">Registrate</a>
					</li>
				@endif
				@else
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" 
							aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								Salir
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</li>
			@endguest
		</ul>
	</div>
</nav>
<hr>

