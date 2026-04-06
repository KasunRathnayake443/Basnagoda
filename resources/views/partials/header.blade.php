<header class="site-header" id="siteHeader">
    <div class="container header-inner">
        <a href="{{ route('home') }}" class="site-logo">
            Basnagoda Walauwa
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Open navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="site-nav" id="siteNav">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('story') }}">Our Story</a>
            <a href="{{ route('rooms') }}">Rooms</a>
            <a href="{{ route('gallery') }}">Gallery</a>
            <a href="{{ route('experiences') }}">Experiences</a>
            <a href="{{ route('visit') }}">Visit</a>
            <a href="{{ route('contact') }}" class="nav-cta">Make an Inquiry</a>
        </nav>
    </div>
</header>