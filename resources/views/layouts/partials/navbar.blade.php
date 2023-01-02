<header class="p-3 bg-primary text-white">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="bg-warning"><a href="{{url('/')}}" class="nav-link px-2 text-secondary"> Home</a></li>

            </ul>


            @auth
                <div class="text-end float-right">
                    {{auth()->user()->username}}&nbsp;
                    <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ route('register.perform') }}" class="btn btn-outline-light me-2">Register</a>
                </div>
            @endguest
        </div>
    </div>
</header>
