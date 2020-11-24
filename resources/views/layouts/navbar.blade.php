<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <span class="navbar-brand">
        <img src="{{ asset('images/logo.jpg') }}" height="50" alt="logo">
    </span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Donations</a>
            </li>
            <!-- Navbar dropdown -->
            <li class="nav-item dropdown">
                <span
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-expanded="false"
                >
                Events
                </span>
                <!-- Dropdown menu -->
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="">Event Calendar</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="">Online Conferences</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Archives</a>
            </li>
        </ul>
    </div>
</nav>
