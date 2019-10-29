				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="/"><img src="{{ asset('img/Logo.png') }}" alt="HelpUs logo" class=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" 
						data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="/usuarios">Acceder</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/foro">Foro</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('organizaciones.infoGeneral') }}">Organizaciones</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/organizaciones">Acerca de</a>
							</li>
						</ul>
					</div>
				</nav>
