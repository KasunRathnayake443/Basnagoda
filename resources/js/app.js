import './bootstrap';

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

const header = document.getElementById('siteHeader');
const menuToggle = document.getElementById('menuToggle');
const siteNav = document.getElementById('siteNav');

window.addEventListener('scroll', function () {
    if (header) {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
});

if (menuToggle && siteNav) {
    menuToggle.addEventListener('click', function () {
        menuToggle.classList.toggle('active');
        siteNav.classList.toggle('active');
    });

    document.querySelectorAll('#siteNav a').forEach(link => {
        link.addEventListener('click', function () {
            menuToggle.classList.remove('active');
            siteNav.classList.remove('active');
        });
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 992) {
            menuToggle.classList.remove('active');
            siteNav.classList.remove('active');
        }
    });
}

/* ================= HERO CAROUSEL ================= */

const heroSlides = document.querySelectorAll('.hero-slide');
const heroPrev = document.getElementById('heroPrev');
const heroNext = document.getElementById('heroNext');

let currentHeroSlide = 0;
let heroInterval;

function showHeroSlide(index) {
    heroSlides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
    });
}

function nextHeroSlide() {
    currentHeroSlide = (currentHeroSlide + 1) % heroSlides.length;
    showHeroSlide(currentHeroSlide);
}

function prevHeroSlide() {
    currentHeroSlide = (currentHeroSlide - 1 + heroSlides.length) % heroSlides.length;
    showHeroSlide(currentHeroSlide);
}

function startHeroAutoplay() {
    if (heroSlides.length > 1) {
        heroInterval = setInterval(nextHeroSlide, 5000);
    }
}

function resetHeroAutoplay() {
    clearInterval(heroInterval);
    startHeroAutoplay();
}

if (heroSlides.length) {
    showHeroSlide(currentHeroSlide);
    startHeroAutoplay();
}

if (heroNext) {
    heroNext.addEventListener('click', function () {
        nextHeroSlide();
        resetHeroAutoplay();
    });
}

if (heroPrev) {
    heroPrev.addEventListener('click', function () {
        prevHeroSlide();
        resetHeroAutoplay();
    });
}

window.openLightbox = function (src) {
    const lightbox = document.getElementById('lightbox');
    const img = document.getElementById('lightbox-img');

    img.src = src;
    lightbox.style.display = 'flex';
};

window.closeLightbox = function () {
    document.getElementById('lightbox').style.display = 'none';
};
