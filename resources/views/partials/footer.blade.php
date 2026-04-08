<footer class="site-footer">
    <div class="footer-top-pattern"></div>

    <div class="container footer-main">
        <div class="footer-brand">
            <p class="footer-label">Heritage Residence</p>
            <h3>Basnagoda Walauwa</h3>
            <p class="footer-text">
                A timeless Sri Lankan walauwa where history, architecture, and quiet hospitality
                come together in graceful harmony.
            </p>
        </div>

        <div class="footer-links-wrap">
            <div class="footer-column">
                <h4>Explore</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('history') }}">History</a></li>
                    <li><a href="{{ route('rooms') }}">Rooms</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Discover</h4>
                <ul>
                    <li><a href="{{ route('experiences') }}">Experiences</a></li>
                    <li><a href="{{ route('visit') }}">Visit</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Get in Touch</h4>
                <ul class="footer-contact-list">
                    <li>Basnagoda, Sri Lanka</li>
                    <li>+94 7X XXX XXXX</li>
                    <li>info@basnagodawalauwa.com</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <p>&copy; {{ date('Y') }} Basnagoda Walauwa. All rights reserved.</p>
            <p class="footer-bottom-note">Preserving heritage with dignity and care.</p>
        </div>
    </div>
</footer>