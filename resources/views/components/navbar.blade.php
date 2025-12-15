@props(['currentPage' => ''])

<!-- # site header -->
<header class="s-header">
    <div class="row s-header__inner width-sixteen-col">
        <div class="s-header__block">
            <div class="s-header__logo">
                <a class="logo" href="{{ url('/resume?id=' . $_GET['id']) }}">
                    <img src="{{ asset('user/images/rutvik-logo.svg') }}" alt="Rutvik">
                </a>
            </div>
            <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
        </div>

        <nav class="s-header__nav">
            <ul class="s-header__menu-links">
                <li class="{{ $currentPage === 'about' ? 'current' : '' }}">
                    <a href="{{ url('/about?id=' . $_GET['id']) }}">About</a>
                </li>
                <li class="{{ $currentPage === 'services' ? 'current' : '' }}">
                    <a href="{{ url('/services?id=' . $_GET['id']) }}">Services</a>
                </li>
                <li class="{{ $currentPage === 'blog' ? 'current' : '' }}">
                    <a href="{{ url('/blog?id=' . $_GET['id']) }}">Blog</a>
                </li>
                <li class="{{ $currentPage === 'portfolio' ? 'current' : '' }}">
                    <a href="{{ url('/resume?id=' . $_GET['id']) }}#clients">Portfolio</a>
                </li>
                <li class="{{ $currentPage === 'contact' ? 'current' : '' }}">
                    <a href="{{ url('/contact?id=' . $_GET['id']) }}">Contact</a>
                </li>
            </ul>

            <div class="s-header__contact">
                <a href="{{ url('/contact?id=' . $_GET['id']) }}" class="btn btn--primary s-header__contact-btn">Let's Work Together</a>
            </div>
        </nav>
    </div>
</header>
