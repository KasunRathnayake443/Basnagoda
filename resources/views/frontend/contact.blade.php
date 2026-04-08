@extends('layouts.app')

@section('title', 'Contact | Basnagoda Walauwa')
@section('meta_description', 'Contact Basnagoda Walauwa for visit inquiries, room stays, and heritage experiences.')

@section('content')
<section class="page-hero contact-hero"
    style="background: linear-gradient(rgba(35, 25, 18, 0.70), rgba(35, 25, 18, 0.70)), url('{{ asset('images/contact-hero.jpg') }}') center/cover no-repeat;">
    <div class="container">
        <div class="page-hero-content">
            <p class="section-kicker light">Contact</p>
            <h1>Plan Your Visit or Stay</h1>
            <p>
                Get in touch to learn more about visiting Basnagoda Walauwa, booking a stay, or arranging a special experience.
            </p>
        </div>
    </div>
</section>

<section class="contact-intro section">
    <div class="container narrow center-text">
        <div class="section-heading center">
            <p class="section-kicker">We’d Love to Hear From You</p>
            <h2>Make an Inquiry</h2>
            <div class="section-divider center-divider"></div>
        </div>

        <p>
            Whether you are planning a heritage visit, an overnight stay, or a private occasion,
            we welcome your inquiry and look forward to helping you experience Basnagoda Walauwa.
        </p>
    </div>
</section>

<section class="contact-section section alt-bg">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-form-card">
                <p class="section-kicker">Inquiry Form</p>
                <h2>Send Us a Message</h2>
                <div class="section-divider"></div>

                <form class="contact-form" onsubmit="return false;">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="guests">Number of Guests</label>
                            <input type="number" id="guests" name="guests" min="1">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="check_in">Check In</label>
                            <input type="date" id="check_in" name="check_in">
                        </div>

                        <div class="form-group">
                            <label for="check_out">Check Out</label>
                            <input type="date" id="check_out" name="check_out">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="6" placeholder="Tell us about your visit, stay, or special request..."></textarea>
                    </div>

                    <button type="button" class="btn btn-primary">Send Inquiry</button>
                </form>
            </div>

            <aside class="contact-side">
                <div class="contact-side-card">
                    <h3>Contact Details</h3>
                    <ul class="contact-list">
                        <li><strong>Phone:</strong> Add phone number</li>
                        <li><strong>Email:</strong> Add email address</li>
                        <li><strong>WhatsApp:</strong> Add WhatsApp number</li>
                    </ul>
                </div>

                <div class="contact-side-card">
                    <h3>Location</h3>
                    <p>
                        Add the full address of Basnagoda Walauwa here, along with any helpful route or landmark information for visitors.
                    </p>
                </div>

                <div class="contact-side-card">
                    <h3>Visitor Notes</h3>
                    <p>
                        You can later use this section for opening hours, check-in guidance, appointment details, or information about photography and private events.
                    </p>
                </div>
            </aside>
        </div>
    </div>
</section>

<section class="contact-map section">
    <div class="container narrow center-text">
        <div class="section-heading center">
            <p class="section-kicker">Find Us</p>
            <h2>Location and Directions</h2>
            <div class="section-divider center-divider"></div>
        </div>

        <p>
            A map or embedded location can be added here later so guests can easily plan their journey.
        </p>

        <div class="map-placeholder">
            <span>Map placeholder for future Google Maps embed</span>
        </div>
    </div>
</section>
@endsection