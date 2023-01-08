<nav class="menu position-relative">
  <span id="titulo">CHEMISTRY ROOM</span>
  <div class="circle atom"><a href="{{route('web.froga1')}}"><img src="{{ asset('multimedia/atom.png') }}" alt="atom icon"></a></div>
  <div class="dropdown position-absolute top-0 end-0 m-3">
    <div class="circle profile d-flex justify-content-center dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="align-self-center px-3">GA</span>
    </div>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="{{route('web.infoUsu')}}">Profila</a>
      <a class="dropdown-item" href="#">Admin</a>
      <a class="dropdown-item" href="#">Login</a>
      <a class="dropdown-item" href="{{route('web.logout')}}">Logout</a>
    </div>
  </div>
</nav>