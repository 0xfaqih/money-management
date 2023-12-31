<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm rounded-bottom">
    <div class="container">
        <a class="navbar-brand" href="/">MoM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>

            </ul>
            {{-- <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="" class="nav-link"><i class="bi bi-person-circle"></i> Account</a>
                </li>
            </ul> --}}
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('login') ? 'active' : '' }} {{ Request::is('register') ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> Account
                    </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle {{ Request::is('login') ? 'active' : '' }} {{ Request::is('register') ? 'active' : '' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i> Account
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                            </li>
                            <li><a class="dropdown-item" href="/register"><i class="bi bi-signpost"></i> Register</a></li>
                        </ul>
                    </li>
                @endauth
                {{-- <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle {{ Request::is('login') ? 'active' : '' }} {{ Request::is('register') ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> Account
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                        </li>
                        <li><a class="dropdown-item" href="/register"><i class="bi bi-signpost"></i> Register</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
