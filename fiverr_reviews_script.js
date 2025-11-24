// fiverr_reviews_script.js - Fixed version with auto-scroll
document.addEventListener("DOMContentLoaded", () => {
    const slider = document.querySelector('.reviews-slider');
    const cards = document.querySelectorAll('.review-card');
    const leftArrow = document.querySelector('.scroll-left');
    const rightArrow = document.querySelector('.scroll-right');
    const indicators = document.querySelectorAll('.indicator-dot');
    const reviewsWrapper = document.querySelector('.fiverr-reviews-wrapper');
    const lightbox = document.getElementById('reviewLightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    const closeBtn = document.querySelector('.lightbox-close');

    let currentIndex = 0;
    const totalCards = cards.length;
    let autoScrollInterval = null;
    const autoScrollDelay = 4000; // 4 seconds

    if (!slider || totalCards === 0) return;

    function updateSlider() {
        const offset = -currentIndex * 100;
        slider.style.transform = `translateX(${offset}%)`;

        // Update indicators
        indicators.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });

        // Update arrows
        if (leftArrow) leftArrow.disabled = currentIndex === 0;
        if (rightArrow) rightArrow.disabled = currentIndex === totalCards - 1;
    }

    function nextSlide() {
        if (currentIndex < totalCards - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; // Loop back to first slide
        }
        updateSlider();
    }

    function prevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalCards - 1; // Loop to last slide
        }
        updateSlider();
    }

    function goToSlide(index) {
        if (index >= 0 && index < totalCards) {
            currentIndex = index;
            updateSlider();
        }
    }

    // Auto-scroll functionality
    function startAutoScroll() {
        if (autoScrollInterval) return; // Already running
        autoScrollInterval = setInterval(() => {
            nextSlide();
        }, autoScrollDelay);
    }

    function stopAutoScroll() {
        if (autoScrollInterval) {
            clearInterval(autoScrollInterval);
            autoScrollInterval = null;
        }
    }

    // Arrow buttons - stop and restart auto-scroll
    if (rightArrow) {
        rightArrow.addEventListener('click', () => {
            stopAutoScroll();
            nextSlide();
            startAutoScroll();
        });
    }

    if (leftArrow) {
        leftArrow.addEventListener('click', () => {
            stopAutoScroll();
            prevSlide();
            startAutoScroll();
        });
    }

    // Indicators - stop and restart auto-scroll
    indicators.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            stopAutoScroll();
            goToSlide(index);
            startAutoScroll();
        });
    });

    // Stop auto-scroll on hover over wrapper
    if (reviewsWrapper) {
        reviewsWrapper.addEventListener('mouseenter', stopAutoScroll);
        reviewsWrapper.addEventListener('mouseleave', startAutoScroll);
    }

    // Stop auto-scroll on hover over cards
    cards.forEach(card => {
        card.addEventListener('mouseenter', stopAutoScroll);
        card.addEventListener('mouseleave', startAutoScroll);
    });

    // Keyboard navigation - stop and restart auto-scroll
    document.addEventListener('keydown', (e) => {
        if (!lightbox || !lightbox.classList.contains('show')) {
            if (e.key === 'ArrowRight') {
                stopAutoScroll();
                nextSlide();
                startAutoScroll();
            } else if (e.key === 'ArrowLeft') {
                stopAutoScroll();
                prevSlide();
                startAutoScroll();
            }
        }
    });

    // Lightbox functionality - stop auto-scroll when lightbox is open
    const reviewImages = document.querySelectorAll('.review-screenshot');

    reviewImages.forEach(screenshot => {
        screenshot.addEventListener('click', function () {
            const img = this.querySelector('.review-image');
            if (lightbox && lightboxImg && img) {
                stopAutoScroll();
                lightbox.classList.add('show');
                lightboxImg.src = img.src;
            }
        });
    });

    if (closeBtn && lightbox && lightboxImg) {
        closeBtn.addEventListener('click', () => {
            lightbox.classList.remove('show');
            lightboxImg.src = '';
            startAutoScroll();
        });
    }

    if (lightbox && lightboxImg) {
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.classList.remove('show');
                lightboxImg.src = '';
                startAutoScroll();
            }
        });
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && lightbox && lightbox.classList.contains('show')) {
            lightbox.classList.remove('show');
            if (lightboxImg) lightboxImg.src = '';
            startAutoScroll();
        }
    });

    // Touch/Swipe support - stop and restart auto-scroll
    let touchStartX = 0;
    let touchEndX = 0;

    const reviewsContainer = document.querySelector('.reviews-container');

    if (reviewsContainer) {
        reviewsContainer.addEventListener('touchstart', (e) => {
            stopAutoScroll();
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        reviewsContainer.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
            startAutoScroll();
        }, { passive: true });

        function handleSwipe() {
            const swipeThreshold = 50;
            if (touchEndX < touchStartX - swipeThreshold) {
                nextSlide();
            }
            if (touchEndX > touchStartX + swipeThreshold) {
                prevSlide();
            }
        }
    }

    // Stop auto-scroll when user focuses on the section
    if (reviewsWrapper) {
        reviewsWrapper.addEventListener('focusin', stopAutoScroll);
        reviewsWrapper.addEventListener('focusout', startAutoScroll);
    }

    // Stop auto-scroll when page is not visible
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopAutoScroll();
        } else {
            startAutoScroll();
        }
    });

    // Initialize
    updateSlider();
    startAutoScroll(); // Start auto-scrolling on page load
});