// portfolio_script.js - True infinite carousel with seamless looping
document.addEventListener("DOMContentLoaded", () => {
    const portfolioRow = document.querySelector('.portfolioRow');
    const originalItems = Array.from(document.querySelectorAll('.portfolioItem'));
    const dots = document.querySelectorAll('.dot');
    const indicators = document.querySelector('.indicators');

    let currentIndex = 0;
    let slideInterval;
    const totalItems = originalItems.length;
    let isTransitioning = false;

    // Clone ALL items and append to end for truly seamless infinite loop
    originalItems.forEach(item => {
        const clone = item.cloneNode(true);
        portfolioRow.appendChild(clone);
    });

    // Also clone and prepend to handle backward navigation
    originalItems.slice().reverse().forEach(item => {
        const clone = item.cloneNode(true);
        portfolioRow.insertBefore(clone, portfolioRow.firstChild);
    });

    // Start from the middle (original items position)
    currentIndex = totalItems;
    updateSliderPosition(false);

    function switchPortfolio(dotElement) {
        stopAutoSliding();
        let portfolioId = parseInt(dotElement.getAttribute('attr'));
        currentIndex = totalItems + (portfolioId * 3); // 3 items per page
        updateSliderPosition(true);
        updateDots();
        startAutoSliding();
    }

    function updateSliderPosition(animate = true) {
        const itemWidth = originalItems[0].getBoundingClientRect().width;
        if (animate) {
            portfolioRow.style.transition = 'transform 0.5s ease-in-out';
        } else {
            portfolioRow.style.transition = 'none';
        }
        portfolioRow.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    }

    function updateDots() {
        // Map current index to dot index
        const actualIndex = ((currentIndex - totalItems) % totalItems + totalItems) % totalItems;
        const dotIndex = Math.floor(actualIndex / 3);

        dots.forEach(dot => dot.classList.remove('active'));
        if (dots[dotIndex]) {
            dots[dotIndex].classList.add('active');
        }
    }

    function slideNext() {
        if (isTransitioning) return;
        isTransitioning = true;

        currentIndex++;
        updateSliderPosition(true);
        updateDots();
    }

    function startAutoSliding() {
        if (!slideInterval) {
            slideInterval = setInterval(slideNext, 3000);
        }
    }

    function stopAutoSliding() {
        if (slideInterval) {
            clearInterval(slideInterval);
            slideInterval = null;
        }
    }

    // Handle transition end to reset position for infinite loop
    portfolioRow.addEventListener('transitionend', () => {
        isTransitioning = false;

        // If we've moved past the second set of items, reset to first set
        if (currentIndex >= totalItems * 2) {
            portfolioRow.style.transition = 'none';
            currentIndex = totalItems;
            updateSliderPosition(false);
            setTimeout(() => {
                portfolioRow.style.transition = 'transform 0.5s ease-in-out';
            }, 50);
        }
        // If we've moved before the first set, reset to second set
        else if (currentIndex <= 0) {
            portfolioRow.style.transition = 'none';
            currentIndex = totalItems;
            updateSliderPosition(false);
            setTimeout(() => {
                portfolioRow.style.transition = 'transform 0.5s ease-in-out';
            }, 50);
        }
    });

    function setupPauseEvents(element) {
        if (!element) return;
        element.addEventListener('mouseover', stopAutoSliding);
        element.addEventListener('mouseout', startAutoSliding);
    }

    // Get all items including clones
    const allItems = document.querySelectorAll('.portfolioItem');
    allItems.forEach(item => setupPauseEvents(item));
    setupPauseEvents(indicators);

    dots.forEach(dot => {
        dot.addEventListener('click', function () {
            switchPortfolio(this);
        });
    });

    // Update slider on resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            updateSliderPosition(false);
        }, 100);
    });

    // Initialize
    updateDots();
    startAutoSliding();

    // Make switchPortfolio globally accessible
    window.switchPortfolio = switchPortfolio;
});