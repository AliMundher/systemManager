<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                @if (Route::has('login'))
                    @auth
                        @if(Auth::user()->utype === 'ADM')
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Salut ({{Auth::user()->name}})
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                                    <a class="dropdown-item"
                                        onclick="event.preventDefault();document.getElementById('form_id').submit()"
                                        href="{{route('logout')}}">Logout</a>
                                    <form action="{{route('logout')}}" method="post" id="form_id">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @else
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Salut ({{Auth::user()->name}})
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{route('user.dashboard')}}">Dashboard</a>
                                <a class="dropdown-item"
                                    onclick="event.preventDefault();document.getElementById('form_id').submit()"
                                    href="{{route('logout')}}">Logout</a>
                                <form action="{{route('logout')}}" method="post" id="form_id">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Register</a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </div>
</nav>
