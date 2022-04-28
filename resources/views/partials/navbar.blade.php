<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #287343;">
    <div class="container">
        <a class="navbar-brand" href="/">Somo Farm</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ $title === 'Promo' ? 'active' : '' }}" href="/promo">Promo</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $title === 'Produk' ? 'active' : '' }}" href="/produk">Produk</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Admin' ? 'active' : '' }}" href="/home-dashboard">Admin</a>
                </li>

            </ul>
            {{-- <span class="navbar-text" style="padding: 10px">
                Jual hewan ternak murah di bantul
            </span> --}}
        </div>
        {{-- <form class="d-flex" style="margin-right: 10px">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light " type="submit">Search</button>
        </form> --}}

        <div class="mb-3"></div>
        <button type="button" class="btn btn-outline-light" style="margin-right: 10px">Login</button>

        <button type="button" class="btn btn-light">Sign up</button>
    </div>
</nav>
