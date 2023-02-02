<nav class="menu position-relative">
    <span id="titulo">CHEMISTRY ROOM</span>
    <div class="circle atom"><a href="{{route('web.froga1')}}"><img src="{{ asset('multimedia/atom.png') }}"
                alt="atom icon"></a></div>
    <div class="dropdown position-absolute top-0 end-0 m-3">
        <div class="circle profile d-flex justify-content-center dropdown-toggle" type="button"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="align-self-center px-3"> {{session()->get('erab')->izena[0] . session()->get('erab')->abizenak[0] }}</span>
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{route('web.profila')}}">Profila</a>
            @if(session()->get('erab')->rol=='admin')
                <a class="dropdown-item" href="{{ route('adminKarpeta.admin') }}">Admin</a>
            
            @endif
            <a class="dropdown-item" href="{{route('web.logout')}}">Itxi Saioa</a>
        </div>
    </div>
</nav>
