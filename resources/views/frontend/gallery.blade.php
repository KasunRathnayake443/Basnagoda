@extends('layouts.app')

@section('title', 'Gallery | Basnagoda Walauwa')
@section('meta_description', 'Explore the beauty, architecture, and heritage details of Basnagoda Walauwa.')

@section('content')
<section class="page-hero gallery-hero">
    <div class="container">
        <div class="page-hero-content">
            <p class="section-kicker light">Gallery</p>
            <h1>The Beauty of Basnagoda Walauwa</h1>
            <p>
                Discover the architecture, atmosphere, and timeless character of a restored Sri Lankan walauwa.
            </p>
        </div>
    </div>
</section>

<section class="gallery-intro section">
    <div class="container narrow center-text">
        <div class="section-heading center">
            <p class="section-kicker">A Visual Journey</p>
            <h2>Moments, Details, and Heritage</h2>
            <div class="section-divider center-divider"></div>
        </div>

        <p>
            From graceful architectural lines to tranquil surroundings, each view of Basnagoda Walauwa reveals a different part of its story. These images offer a glimpse into the atmosphere, craftsmanship, and quiet elegance that make the walauwa special.
        </p>
    </div>
</section>

<section class="gallery-section section alt-bg">
    <div class="container">
        <div class="gallery-grid">
            <div class="gallery-item large" onclick="openLightbox('{{ Vite::asset('resources/images/gallery-1.jpg') }}')">
                <img src="{{ Vite::asset('resources/images/gallery-1.jpg') }}" alt="Front view of Basnagoda Walauwa">
                <div class="gallery-overlay">
                    <span>Exterior View</span>
                </div>
            </div>

            <div class="gallery-item" onclick="openLightbox('{{ Vite::asset('resources/images/gallery-2.jpg') }}')">
                <img src="{{ Vite::asset('resources/images/gallery-2.jpg') }}" alt="Traditional interior of Basnagoda Walauwa">
                <div class="gallery-overlay">
                    <span>Interior Details</span>
                </div>
            </div>

            <div class="gallery-item" onclick="openLightbox('{{ Vite::asset('resources/images/gallery-3.jpg') }}')">
                <img src="{{ Vite::asset('resources/images/gallery-3.jpg') }}" alt="Courtyard area of Basnagoda Walauwa">
                <div class="gallery-overlay">
                    <span>Courtyard</span>
                </div>
            </div>

            <div class="gallery-item" onclick="openLightbox('{{ Vite::asset('resources/images/gallery-4.jpg') }}')">
                <img src="{{ Vite::asset('resources/images/gallery-4.jpg') }}" alt="Hallway and heritage features">
                <div class="gallery-overlay">
                    <span>Historic Spaces</span>
                </div>
            </div>

            <div class="gallery-item large" onclick="openLightbox('{{ Vite::asset('resources/images/gallery-5.jpg') }}')">
                <img src="{{ Vite::asset('resources/images/gallery-5.jpg') }}" alt="Garden and outdoor surroundings">
                <div class="gallery-overlay">
                    <span>Gardens & Surroundings</span>
                </div>
            </div>

            <div class="gallery-item" onclick="openLightbox('{{ Vite::asset('resources/images/gallery-6.jpg') }}')">
                <img src="{{ Vite::asset('resources/images/gallery-6.jpg') }}" alt="Architectural detail of Basnagoda Walauwa">
                <div class="gallery-overlay">
                    <span>Architectural Detail</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-cta section">
    <div class="container narrow center-text">
        <p class="section-kicker">Experience It in Person</p>
        <h2>See the Walauwa Beyond the Frame</h2>
        <div class="section-divider center-divider"></div>
        <p>
            Basnagoda Walauwa invites you to experience its heritage, calm atmosphere, and timeless beauty in person.
        </p>

        <div class="hero-actions centered-actions">
            <a href="{{ route('visit') }}" class="btn btn-primary">Plan a Visit</a>
            <a href="{{ route('rooms') }}" class="btn btn-secondary dark-outline">Explore Rooms</a>
        </div>
    </div>
</section>

<div id="lightbox" class="lightbox">
    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
    <img id="lightbox-img" src="">
</div>
@endsection