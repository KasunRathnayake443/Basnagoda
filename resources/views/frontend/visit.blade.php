@extends('layouts.app')

@section('title', 'Visit Us | Basnagoda Walauwa')
@section('meta_description', 'Plan your visit to Basnagoda Walauwa and discover a restored Sri Lankan heritage mansion open for visits and stays.')

@section('content')
<section class="page-hero visit-hero">
    <div class="container">
        <div class="page-hero-content">
            <p class="section-kicker light">Visit Us</p>
            <h1>Plan Your Visit to Basnagoda Walauwa</h1>
            <p>
                Step into a setting where heritage, atmosphere, and Sri Lankan tradition come together in a meaningful visitor experience.
            </p>
        </div>
    </div>
</section>

<section class="visit-intro section">
    <div class="container narrow center-text">
        <div class="section-heading center">
            <p class="section-kicker">A Warm Welcome</p>
            <h2>Experience the Walauwa in Person</h2>
            <div class="section-divider center-divider"></div>
        </div>

        <p>
            Basnagoda Walauwa welcomes visitors who wish to experience the beauty, calm, and cultural character of a restored Sri Lankan mansion. Whether you are planning a short visit or a longer stay, the walauwa offers a setting shaped by history and quiet elegance.
        </p>
    </div>
</section>

<section class="visit-info section alt-bg">
    <div class="container">
        <div class="visit-grid">
            <div class="visit-main-card">
                <p class="section-kicker">Visitor Information</p>
                <h2>Everything You May Need to Know</h2>
                <div class="section-divider"></div>

                <div class="visit-info-list">
                    <div class="visit-info-item">
                        <h3>Opening Hours</h3>
                        <p>
                            Placeholder text for visiting hours. You can later update this with exact opening and closing times for day visits, tours, or guest check-ins.
                        </p>
                    </div>

                    <div class="visit-info-item">
                        <h3>Entry and Visits</h3>
                        <p>
                            Add details here about whether visitors can walk in, whether prior reservations are required, and whether guided tours or special visiting arrangements are available.
                        </p>
                    </div>

                    <div class="visit-info-item">
                        <h3>Stay Inquiries</h3>
                        <p>
                            Guests who wish to stay overnight can later use this section to understand room booking options, check-in guidance, and any special arrangements related to accommodation.
                        </p>
                    </div>

                    <div class="visit-info-item">
                        <h3>Photography and Events</h3>
                        <p>
                            This area can later explain rules or arrangements for photography, pre-wedding shoots, private gatherings, and special events held at the property.
                        </p>
                    </div>
                </div>
            </div>

            <aside class="visit-side">
                <div class="visit-side-card">
                    <h3>Location</h3>
                    <p>
                        Add the full address of Basnagoda Walauwa here, along with nearby landmarks or route guidance for visitors.
                    </p>
                </div>

                <div class="visit-side-card">
                    <h3>Contact Details</h3>
                    <ul class="visit-contact-list">
                        <li><strong>Phone:</strong> Add phone number</li>
                        <li><strong>Email:</strong> Add email address</li>
                        <li><strong>WhatsApp:</strong> Add WhatsApp number</li>
                    </ul>
                </div>

                <div class="visit-side-card">
                    <h3>Useful Notes</h3>
                    <p>
                        You can later add visitor guidelines here, such as dress suggestions, arrival tips, parking details, or seasonal information.
                    </p>
                </div>
            </aside>
        </div>
    </div>
</section>

<section class="visit-highlight section">
    <div class="container">
        <div class="story-grid">
            <div class="story-image-col">
                <img src="{{ Vite::asset('resources/images/visit-1.jpg') }}" alt="Visitors experiencing Basnagoda Walauwa">
            </div>

            <div class="story-text-col">
                <p class="section-kicker">What to Expect</p>
                <h2>A Visit Framed by Heritage and Calm</h2>
                <div class="section-divider"></div>

                <p>
                    A visit to Basnagoda Walauwa is intended to feel unhurried and memorable. From the character of its architecture to the stillness of its surroundings, the property offers an atmosphere that invites appreciation rather than rush.
                </p>

                <p>
                    As more visitor experiences are defined, this section can later include guided tours, dining options, cultural features, outdoor spaces, and special visitor packages.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="visit-map section alt-bg">
    <div class="container narrow center-text">
        <div class="section-heading center">
            <p class="section-kicker">Find Us</p>
            <h2>Location and Directions</h2>
            <div class="section-divider center-divider"></div>
        </div>

        <p>
            A map or embedded location can be added here later so that guests can easily find Basnagoda Walauwa and plan their journey with confidence.
        </p>

        <div class="map-placeholder">
            <span>Map placeholder for future Google Maps embed</span>
        </div>
    </div>
</section>

<section class="story-cta section">
    <div class="container narrow center-text">
        <p class="section-kicker">Ready to Visit?</p>
        <h2>Plan a Visit or Stay at Basnagoda Walauwa</h2>
        <div class="section-divider center-divider"></div>

        <p>
            Whether you are interested in a heritage visit, a quiet stay, or a special occasion, we look forward to welcoming you.
        </p>

        <div class="hero-actions centered-actions">
            <a href="{{ route('contact') }}" class="btn btn-primary">Make an Inquiry</a>
            <a href="{{ route('rooms') }}" class="btn btn-secondary dark-outline">Explore Rooms</a>
        </div>
    </div>
</section>
@endsection