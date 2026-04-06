@extends('layouts.app')

@section('title', 'Basnagoda Walauwa | Home')

@section('content')
<section class="hero-slider" id="heroSlider">
   <div class="hero-slide active" style="background-image: url('{{ Vite::asset('resources/images/hero-1.jpg') }}');">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-copy">
                <p class="hero-kicker">Heritage Residence of Sri Lanka</p>
                <h1>Basnagoda Walauwa</h1>
                <h2 class="hero-sinhala">බස්නාගොඩ වලව්ව</h2>
                <p class="hero-text">
                    A proud ancestral residence shaped by Sri Lankan history, graceful architecture,
                    and the quiet dignity of an earlier era.
                </p>
            </div>
        </div>
    </div>

   <div class="hero-slide active" style="background-image: url('{{ Vite::asset('resources/images/hero-2.jpg') }}');">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-copy">
                <p class="hero-kicker">Timeless Architecture</p>
                <h1>Basnagoda Walauwa</h1>
                <h2 class="hero-sinhala">බස්නාගොඩ වලව්ව</h2>
                <p class="hero-text">
                    From wide verandas to enduring timber and tile, the walauwa stands as a living
                    expression of old Sri Lankan elegance.
                </p>
            </div>
        </div>
    </div>

    <div class="hero-slide" style="background-image: url('{{ Vite::asset('resources/images/hero-3.jpg') }}');">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-copy">
                <p class="hero-kicker">History • Legacy • Grace</p>
                <h1>Basnagoda Walauwa</h1>
                <h2 class="hero-sinhala">බස්නාගොඩ වලව්ව</h2>
                <p class="hero-text">
                    Preserving the spirit of a noble Sri Lankan home, where memory, beauty, and
                    cultural character continue to live on.
                </p>
            </div>
        </div>
    </div>

    <button class="hero-nav hero-prev" id="heroPrev" aria-label="Previous slide">
        &#10094;
    </button>

    <button class="hero-nav hero-next" id="heroNext" aria-label="Next slide">
        &#10095;
    </button>
</section>

    <section class="welcome section">
    <div class="container">
        <div class="welcome-grid">
            <div class="welcome-content">
                <p class="section-kicker">Welcome to Basnagoda Walauwa</p>
                <h2>A Heritage Mansion Reawakened with Grace</h2>
                <div class="section-divider"></div>

                <p>
                    Basnagoda Walauwa stands as a proud reminder of Sri Lanka’s architectural
                    beauty, cultural memory, and enduring sense of place. Carefully restored
                    with respect for its original character, the walauwa now opens its doors
                    to those who wish to experience the elegance of a bygone era.
                </p>

                <p>
                    More than a place to visit, it is a place to feel — where old walls,
                    spacious courtyards, timber details, and quiet surroundings come together
                    to offer a stay rooted in story, tradition, and warm hospitality.
                </p>
                <br>
                <a href="{{ route('story') }}" class="btn btn-primary">Discover Our Story</a>
            </div>

            <div class="welcome-image-wrap">
                <img src="{{ Vite::asset('resources/images/welcome.jpg') }}" alt="Basnagoda Walauwa courtyard" class="welcome-image">
            </div>
        </div>
    </div>
</section>

    <section class="section heritage-highlights">
        <div class="container">
            <div class="section-heading center">
                <p class="section-label">Heritage Highlights</p>
                <h2>The Essence of the Walauwa</h2>
            </div>

            <div class="card-grid">
                <div class="feature-card">
                    <h3>Historic Architecture</h3>
                    <p>Traditional forms, elegant proportions, and details that reflect a proud Sri Lankan legacy.</p>
                </div>

                <div class="feature-card">
                    <h3>Timeless Interiors</h3>
                    <p>Spaces shaped by antique character, calm textures, and the quiet beauty of old-world design.</p>
                </div>

                <div class="feature-card">
                    <h3>Restful Setting</h3>
                    <p>A serene environment that allows guests to experience history, comfort, and countryside peace.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section rooms-preview">
        <div class="container">
            <div class="section-heading">
                <p class="section-label">Stay</p>
                <h2>Rooms of Quiet Elegance</h2>
            </div>

            <div class="card-grid rooms-grid">
                <div class="room-card">
                    <img src="{{ Vite::asset('resources/images/room-1.jpg') }}" alt="Room 1">
                    <div class="room-card-body">
                        <h3>Classic Chamber</h3>
                        <p>A refined stay inspired by heritage interiors and understated comfort.</p>
                    </div>
                </div>

                <div class="room-card">
                    <img src="{{ Vite::asset('resources/images/room-2.jpg') }}" alt="Room 2">
                    <div class="room-card-body">
                        <h3>Garden Suite</h3>
                        <p>Views, light, and a peaceful ambiance rooted in the spirit of the estate.</p>
                    </div>
                </div>

                <div class="room-card">
                    <img src="{{ Vite::asset('resources/images/room-3.jpg') }}" alt="Room 3">
                    <div class="room-card-body">
                        <h3>Walauwa Suite</h3>
                        <p>A more spacious experience for those who wish to stay close to history.</p>
                    </div>
                </div>
            </div>

            <div class="section-action">
                <a href="{{ route('rooms') }}" class="btn btn-primary">View All Rooms</a>
            </div>
        </div>
    </section>

    <section class="section architecture-section">
        <div class="container two-column reverse">
            <div class="text-block">
                <p class="section-label">Architecture</p>
                <h2>Crafted With Tradition in Every Detail</h2>
                <p>
                    Wide verandas, generous openings, old timber work, tiled roofs, and carefully
                    preserved design features give the walauwa its distinctive identity.
                </p>
                <p>
                    The architecture is not merely seen — it is felt through shadow, breeze, light,
                    and proportion.
                </p>
            </div>
            <div class="image-card">
                <img src="{{ Vite::asset('resources/images/architecture.jpg') }}" alt="Architecture detail">
            </div>
        </div>
    </section>

    <section class="section experiences-preview">
        <div class="container">
            <div class="section-heading">
                <p class="section-label">Experiences</p>
                <h2>Moments Rooted in Place</h2>
            </div>

            <div class="card-grid">
                <div class="feature-card">
                    <h3>Heritage Walks</h3>
                    <p>Discover the story, setting, and architectural personality of the walauwa.</p>
                </div>

                <div class="feature-card">
                    <h3>Traditional Cuisine</h3>
                    <p>Enjoy flavors inspired by local culture, hospitality, and home-style tradition.</p>
                </div>

                <div class="feature-card">
                    <h3>Quiet Retreat</h3>
                    <p>Slow down and experience the gentle rhythm of a place shaped by memory and calm.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section cta-section">
        <div class="container cta-box">
            <p class="section-label">Visit Basnagoda Walauwa</p>
            <h2>Experience the charm of a living Sri Lankan walauwa</h2>
            <a href="{{ route('contact') }}" class="btn btn-primary">Make an Inquiry</a>
        </div>
    </section>
@endsection