@extends('layouts.app')

@section('title', 'Experiences | Basnagoda Walauwa')
@section('meta_description', 'Discover memorable experiences at Basnagoda Walauwa, from heritage stays to cultural moments and peaceful surroundings.')

@section('content')
<section class="page-hero experiences-hero">
    <div class="container">
        <div class="page-hero-content">
            <p class="section-kicker light">Experiences</p>
            <h1>Moments Shaped by Heritage and Place</h1>
            <p>
                More than a destination, Basnagoda Walauwa is an experience of atmosphere, tradition,
                and quiet elegance rooted in Sri Lankan heritage.
            </p>
        </div>
    </div>
</section>

<section class="experiences-intro section">
    <div class="container narrow center-text">
        <div class="section-heading center">
            <p class="section-kicker">A Meaningful Stay</p>
            <h2>Discover the Spirit of the Walauwa</h2>
            <div class="section-divider center-divider"></div>
        </div>

        <p>
            Every visit to Basnagoda Walauwa offers more than accommodation. It offers a chance to slow
            down, take in the details of a historic setting, and experience a way of life shaped by space,
            beauty, and cultural memory.
        </p>
    </div>
</section>

<section class="experience-block section alt-bg">
    <div class="container">
        <div class="story-grid">
            <div class="story-image-col">
                <img src="{{ Vite::asset('resources/images/experiences-1.jpg') }}" alt="Traditional dining experience at Basnagoda Walauwa">
            </div>

            <div class="story-text-col">
                <p class="section-kicker">Traditional Dining</p>
                <h2>Taste the Warmth of Sri Lankan Hospitality</h2>
                <div class="section-divider"></div>

                <p>
                    Guests may enjoy meals inspired by Sri Lankan tradition, served within an atmosphere
                    that reflects the grace and warmth of the walauwa. Dining here is not only about food,
                    but about setting, ritual, and hospitality.
                </p>

                <p>
                    This section can later be updated with real dining experiences, signature dishes,
                    private meal options, or tea service details.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="experience-block section">
    <div class="container">
        <div class="story-grid reverse">
            <div class="story-text-col">
                <p class="section-kicker">Quiet Retreat</p>
                <h2>Rest in a Setting of Calm and Character</h2>
                <div class="section-divider"></div>

                <p>
                    The walauwa invites guests to step away from noise and hurry. Its verandahs, gardens,
                    and interior spaces create an environment suited for rest, reflection, and meaningful pause.
                </p>

                <p>
                    Whether enjoying a peaceful morning, an afternoon in the courtyard, or an evening surrounded
                    by old-world atmosphere, the property offers a sense of calm that modern spaces rarely provide.
                </p>
            </div>

            <div class="story-image-col">
                <img src="{{ Vite::asset('resources/images/experiences-2.jpg') }}" alt="Peaceful heritage stay at Basnagoda Walauwa">
            </div>
        </div>
    </div>
</section>

<section class="experience-features section alt-bg">
    <div class="container">
        <div class="section-heading center">
            <p class="section-kicker">Highlights</p>
            <h2>Experiences You Can Present Later</h2>
            <div class="section-divider center-divider"></div>
        </div>

        <div class="experience-card-grid">
            <div class="experience-card">
                <h3>Heritage Walks</h3>
                <p>
                    Introduce guests to architectural details, stories, and special spaces within the walauwa.
                </p>
            </div>

            <div class="experience-card">
                <h3>Garden Moments</h3>
                <p>
                    Create peaceful outdoor experiences with views, quiet seating, and natural surroundings.
                </p>
            </div>

            <div class="experience-card">
                <h3>Cultural Dining</h3>
                <p>
                    Offer traditional meals, tea experiences, or special curated dining rooted in local identity.
                </p>
            </div>

            <div class="experience-card">
                <h3>Photography Sessions</h3>
                <p>
                    Use the beauty of the walauwa as a setting for portraits, wedding shoots, or creative sessions.
                </p>
            </div>

            <div class="experience-card">
                <h3>Private Gatherings</h3>
                <p>
                    Host refined small events, family occasions, or intimate celebrations in a unique setting.
                </p>
            </div>

            <div class="experience-card">
                <h3>Curated Stays</h3>
                <p>
                    Build memorable overnight experiences around comfort, heritage, and thoughtful hospitality.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="experience-block section">
    <div class="container">
        <div class="story-grid">
            <div class="story-image-col">
                <img src="{{ Vite::asset('resources/images/experiences-3.jpg') }}" alt="Cultural heritage atmosphere at Basnagoda Walauwa">
            </div>

            <div class="story-text-col">
                <p class="section-kicker">Cultural Atmosphere</p>
                <h2>A Place That Feels Distinctly Sri Lankan</h2>
                <div class="section-divider"></div>

                <p>
                    What makes Basnagoda Walauwa special is not only its structure, but its spirit.
                    The spaces, textures, light, and rhythm of the property come together to create
                    an experience deeply connected to Sri Lankan heritage.
                </p>

                <p>
                    This page can later be expanded with real activities, partnerships, seasonal events,
                    local excursions, or custom guest experiences.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="story-cta section alt-bg">
    <div class="container narrow center-text">
        <p class="section-kicker">Plan Your Experience</p>
        <h2>Stay, Visit, and Be Part of the Story</h2>
        <div class="section-divider center-divider"></div>

        <p>
            Basnagoda Walauwa invites you to discover heritage not only as history, but as something that can still be felt.
        </p>

        <div class="hero-actions centered-actions">
            <a href="{{ route('rooms') }}" class="btn btn-primary">Explore Rooms</a>
            <a href="{{ route('contact') }}" class="btn btn-secondary dark-outline">Make an Inquiry</a>
        </div>
    </div>
</section>
@endsection