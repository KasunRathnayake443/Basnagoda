@extends('layouts.app')

@section('title', 'Our Story | Basnagoda Walauwa')
@section('meta_description', 'Discover the story, heritage, and restoration journey of Basnagoda Walauwa.')

@section('content')
<section class="page-hero story-hero" 
    style="background: linear-gradient(rgba(35, 25, 18, 0.70), rgba(35, 25, 18, 0.70)), url('{{ asset('images/story-hero.jpg') }}') center/cover no-repeat;">
    <div class="container">
        <div class="page-hero-content">
            <p class="section-kicker light">Our Story</p>
            <h1>The Story of Basnagoda Walauwa</h1>
            <p>
                A place shaped by history, restored with care, and prepared to welcome a new generation.
            </p>
        </div>
    </div>
</section>

<section class="story-intro section">
    <div class="container narrow">
        <div class="section-heading center">
            <p class="section-kicker">A Living Heritage</p>
            <h2>Where History Still Speaks</h2>
            <div class="section-divider center-divider"></div>
        </div>

        <p>
            Basnagoda Walauwa is envisioned as more than a restored building. It is a place
            where architecture, memory, and identity continue to live together. With its
            traditional form, dignified atmosphere, and deep sense of place, the walauwa
            represents a style of Sri Lankan heritage that deserves to be preserved and shared.
        </p>

        <p>
            Once associated with an era of refinement, craftsmanship, and cultural pride,
            the walauwa now begins a new chapter. Through thoughtful restoration and renewed
            purpose, it is being opened to visitors and guests who wish to experience its
            beauty, quiet character, and timeless charm.
        </p>
    </div>
</section>

<section class="story-section section alt-bg">
    <div class="container">
        <div class="story-grid">
            <div class="story-image-col">
                <img src="{{ asset('images/story-1.jpg') }}" alt="Historic architecture of Basnagoda Walauwa">
            </div>

            <div class="story-text-col">
                <p class="section-kicker">The Heritage</p>
                <h2>A Mansion Rooted in Sri Lankan Tradition</h2>
                <div class="section-divider"></div>

                <p>
                    Traditional walauwas are not simply residences; they are expressions of
                    status, taste, and local craftsmanship. From broad verandas and internal
                    courtyards to carefully proportioned spaces and natural ventilation,
                    these homes were built with both grace and practicality in mind.
                </p>

                <p>
                    Basnagoda Walauwa carries that same spirit. Its design, atmosphere, and
                    presence reflect the values of an older Sri Lankan world — one shaped by
                    dignity, hospitality, and a close relationship with the surrounding land.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="story-section section">
    <div class="container">
        <div class="story-grid reverse">
            <div class="story-text-col">
                <p class="section-kicker">The Restoration</p>
                <h2>Preserved with Respect, Renewed for the Future</h2>
                <div class="section-divider"></div>

                <p>
                    The restoration of Basnagoda Walauwa is guided by a simple but meaningful
                    purpose: to protect the soul of the place while making it ready to be
                    experienced once again. Every effort is intended to honour the original
                    character of the mansion while introducing the care and comfort needed
                    for present-day visitors.
                </p>

                <p>
                    Rather than erasing its age, the restoration seeks to celebrate it.
                    Surfaces, spaces, and details are valued not only for how they look,
                    but for what they represent — the passage of time, the work of skilled
                    hands, and the continuing life of a historic home.
                </p>
            </div>

            <div class="story-image-col">
                <img src="{{ asset('images/story-2.png') }}" alt="Restored spaces of Basnagoda Walauwa">
            </div>
        </div>
    </div>
</section>

<section class="story-highlight section dark-section">
    <div class="container narrow center-text">
        <p class="section-kicker light">A New Chapter</p>
        <h2>Opened with Pride for Visitors and Guests</h2>
        <div class="section-divider center-divider gold"></div>

        <p>
            Today, Basnagoda Walauwa is being prepared to welcome the public — not only as a
            place to see, but as a place to experience. Guests will be able to explore its
            character, appreciate its setting, and enjoy the rare privilege of staying within
            a space shaped by heritage.
        </p>

        <p>
            Whether visiting for a quiet retreat, a cultural experience, or a meaningful stay,
            each guest becomes part of the continuing story of the walauwa.
        </p>
    </div>
</section>

<section class="timeline-section section">
    <div class="container narrow">
        <div class="section-heading center">
            <p class="section-kicker">Journey Through Time</p>
            <h2>The Story in Stages</h2>
            <div class="section-divider center-divider"></div>
        </div>

        <div class="timeline">
            <div class="timeline-item">
                <span class="timeline-year">Origins</span>
                <div class="timeline-content">
                    <h3>A Distinguished Beginning</h3>
                    <p>
                        Basnagoda Walauwa begins as a residence of character and importance,
                        shaped by the architectural and cultural values of its time.
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <span class="timeline-year">Legacy</span>
                <div class="timeline-content">
                    <h3>An Enduring Presence</h3>
                    <p>
                        Through changing times, the walauwa remains a quiet witness to memory,
                        family history, and the identity of its surroundings.
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <span class="timeline-year">Restoration</span>
                <div class="timeline-content">
                    <h3>A Careful Revival</h3>
                    <p>
                        With thoughtful restoration, the mansion begins to regain its former
                        elegance while preserving the authenticity that makes it special.
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <span class="timeline-year">Today</span>
                <div class="timeline-content">
                    <h3>A Place Reopened</h3>
                    <p>
                        A new chapter begins as Basnagoda Walauwa prepares to receive visitors
                        and guests seeking heritage, atmosphere, and meaningful experience.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="story-cta section alt-bg">
    <div class="container narrow center-text">
        <p class="section-kicker">Visit or Stay</p>
        <h2>Become Part of the Continuing Story</h2>
        <div class="section-divider center-divider"></div>
        <p>
            Basnagoda Walauwa invites you to step into a setting where Sri Lankan heritage
            is not only remembered, but lived.
        </p>

        <div class="hero-actions centered-actions">
            <a href="{{ route('rooms') }}" class="btn btn-primary">Explore Rooms</a>
            <a href="{{ route('contact') }}" class="btn btn-secondary dark-outline">Plan Your Visit</a>
        </div>
    </div>
</section>
@endsection