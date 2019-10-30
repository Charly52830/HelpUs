<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('acoso.informacionGeneral')}}"> <img src="{{ asset('img/Logo.png') }}" alt="HelpUs logo" class=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('acoso.informacionGeneral')}}" >Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('publicaciones.show_all')}}">Foro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('organizaciones.infoGeneral')}}">Organizaciones</a>
            </li>
        </ul>
    </div>
</nav>
<hr width="100%" />
<div class="align-middle">
    <a class="text-center" href="{{route('acoso.informacionGeneral')}}"> <img class="rounded mx-auto d-block" src="{{ asset('img/Logo.png') }}" alt="HelpUs logo" class=""></a>
    <div class="text-center text-mute font-weight-light font-italic">Sitio de información sobre el acoso</div>
</div>
<hr width="100%" />
