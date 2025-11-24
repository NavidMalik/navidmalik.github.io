// automation_script.js
document.addEventListener("DOMContentLoaded", () => {
    const automationRow = document.querySelector('.automationRow');
    const automationItems = document.querySelectorAll('.automationItem');
    const autoDots = document.querySelectorAll('.auto-dot');
    const indicators = document.querySelector('.automation-indicators');
    const videoModal = document.getElementById('videoModal');
    const modalVideo = document.getElementById('modalVideo');
    const closeModal = document.querySelector('.close-modal');
    const playBtns = document.querySelectorAll('.play-btn');

    let counter = 0;
    let slideInterval;

    function switchAutomation(dotElement) {
        let automationId = parseInt(dotElement.getAttribute('attr'));
        counter = automationId;
        updateSliderPosition();
        updateDots();
    }

    function updateSliderPosition() {
        const itemWidth = automationItems[0].getBoundingClientRect().width;
        automationRow.style.transform = `translateX(-${counter * itemWidth}px)`;
    }

    function updateDots() {
        autoDots.forEach(dot => dot.classList.remove('active'));
        autoDots[counter].classList.add('active');
    }

    function slideNext() {
        counter = (counter + 1) % autoDots.length;
        automationRow.style.transition = 'transform 0.5s ease-in-out';
        updateSliderPosition();
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

    startAutoSliding();

    function setupPauseEvents(element) {
        element.addEventListener('mouseover', stopAutoSliding);
        element.addEventListener('mouseout', startAutoSliding);
    }

    automationItems.forEach(item => setupPauseEvents(item));
    setupPauseEvents(indicators);

    autoDots.forEach(dot => {
        dot.addEventListener('click', function () {
            stopAutoSliding();
            switchAutomation(this);
        });
    });

    playBtns.forEach((btn, index) => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            const video = automationItems[index].querySelector('video');
            modalVideo.src = video.src;
            videoModal.classList.add('show');
            modalVideo.play();
            stopAutoSliding();
        });
    });

    closeModal.addEventListener('click', () => {
        videoModal.classList.remove('show');
        modalVideo.pause();
        modalVideo.currentTime = 0;
        modalVideo.src = '';
        startAutoSliding();
    });

    videoModal.addEventListener('click', (e) => {
        if (e.target === videoModal) {
            videoModal.classList.remove('show');
            modalVideo.pause();
            modalVideo.currentTime = 0;
            modalVideo.src = '';
            startAutoSliding();
        }
    });

    window.addEventListener('resize', () => {
        updateSliderPosition();
    });

    automationRow.addEventListener('transitionend', () => {
        if (counter === automationItems.length - 1) {
            automationRow.style.transition = 'none';
            automationRow.style.transform = 'translateX(0)';
            counter = 0;
            setTimeout(() => {
                automationRow.style.transition = 'transform 0.5s ease-in-out';
            }, 50);
        }
    });

    window.switchAutomation = switchAutomation;
});