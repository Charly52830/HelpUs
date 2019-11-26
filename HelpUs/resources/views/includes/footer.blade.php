			<div class="container-fluid fixed-bottom text-right">
				<div id="botIFrame">
					<button type="button" class="btn btn-info" onclick="displayIframe()">Habla con Perry</button>
				</div>
			</div>
			<footer>
			<div class="container ">
				<hr>
				<div class="row">
					<div class="col-md-4 text-center">
						<a href="{{route('acoso.informacionGeneral')}}">
							<img class="rounded mx-auto d-block" src="{{ asset('img/Logo.png') }}" alt="HelpUs logo">
						</a>
					</div>
					<div class="col-md-4 text-center">
						<h5>Los favoritos de María</h5>
						492 134 7672
						<p>favoritos@uaz.edu.mx</p>
					</div>
					<div class="col-md-4 text-center">
						 <img width="100" src="{{ asset('img/UAZLogo.jpeg') }}" alt="Logo UAZ">
					</div>
				</div>
			</div>
			</footer>

			<!-- Codigo fuente de JQuery -->
			<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>

			<!-- Codigo fuente de bootstrap -->
			<script src="{{ asset('js/bootstrap.min.js') }}"></script>

			<!-- Funciones personales-->
			<script src="{{ asset('js/main.js') }}"></script>
