<div class="navbar-area">

    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                    {{-- <p style="font-family: 'Montserrat', sans-serif; color: white;margin: 0 auto; font-size: large">Scholarship Portal</p> --}}
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle active">Home</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">Home One</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-two.html" class="nav-link active">Home Two</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('home') }}"
                                class="{{ \Request::route()->getName() == 'home' ? 'nav-link active' : 'nav-link' }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('available_scholarships') }}"
                                class="{{ \Request::route()->getName() == 'available_scholarships' ? 'nav-link active' : 'nav-link' }}">Scholarships</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">Companies</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">News</a>
                        </li> --}}

                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact Us</a>
                        </li>

                        {{-- extranav --}}
                        {{-- @auth

                            <div class="student_name">
                                <li class="nav-item" id="student_name">
                                    <a href="#" class="nav-link dropdown-toggle">{{ Auth::user()->name }}</a>
                                    <ul class="dropdown-menu">
                                        @if (!$user->hasRole('TENANT'))
                                            <li class="nav-item">
                                                <a href="{{ route('student_dashboard') }}" class="nav-link">
                                                    Dashboard</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('student_profile', auth()->user()->id) }}"
                                                    class="nav-link">My
                                                    Profile</a>
                                            </li>
                                        @endif
                                        @can('tenant-can')
                                            <li class="nav-item">
                                                <a href="{{ route('dashboard') }}" class="nav-link">
                                                    Dashboard</a>
                                            </li>
                                        @endcan
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </div>
                        @endauth --}}
                    </ul>

                    @guest
                        <div class="other-option">

                            {{-- @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="signin-btn">Sign In</a>
                            @endif

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="signup-btn">Sign Up</a>
                            @endif --}}
                            <a href="{{ route('login') }}"
                                class="{{ \Request::route()->getName() == 'login' ? 'signin-btn' : 'signup-btn' }}">Sign In</a>

                            <a href="{{ route('register') }}"
                                class="{{ \Request::route()->getName() == 'register' ? 'signin-btn' : 'signup-btn' }}">Sign Up</a>


                        </div>
                    @else
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item" id="student_name">
                                <a href="#" class="nav-link dropdown-toggle">{{ Auth::user()->name }}</a>
                                <ul class="dropdown-menu">
                                    @cannot('tenant-can')
                                        <li class="nav-item">
                                            <a href="{{ route('student_dashboard') }}" class="nav-link">
                                                Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('student_profile', auth()->user()->id) }}"
                                                class="nav-link">My Profile</a>
                                        </li>
                                    @endcan
                                    @can('tenant-can')
                                        <li class="nav-item">
                                            <a href="{{ route('dashboard') }}" class="nav-link">
                                                Dashboard</a>
                                        </li>
                                    @endcan
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endguest
                </div>
            </nav>
        </div>
    </div>
</div>
