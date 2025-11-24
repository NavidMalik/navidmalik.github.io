<!-- footer.php - Update footer section -->
</body>
<footer style="margin-top: 3%;">
    <div class="container" id="contact">
        <div class="row heading-block" data-aos="fade-up">
            <div class="col-lg-12">
                <h2 class="section-heading" style="float: left;">GET IN TOUCH</h2>
            </div>
        </div>
        <div class="row" style="padding-top: 3%;padding-bottom:3%">
            <!-- Column for Text and Message Me Button -->
            <div class="col-lg-5 offset-lg-1">
                <p class="text-justify"
                    style='text-align:justify; font-family: "Frank Ruhl Libre", serif; font-size: 1.5rem; font-weight: 300; line-height: 1.159; letter-spacing: -0.05rem; color: #767776;'>
                    I specialize in building high-quality websites and mobile applications that help businesses reach
                    their goals. Whether you're a startup or an established company, I'm here to bring your ideas to
                    life with innovative solutions tailored to your needs. Let's collaborate to create something
                    exceptional.
                </p>
            </div>

            <!-- Column for Follow Me and Contact Me -->
            <div class="col-lg-5">
                <div class="row">
                    <!-- Follow Me Section -->
                    <div class="col-md-6 follow-contact">
                        <div style="color:white">
                            <h5>Follow Me</h5>
                        </div>
                        <div style="color:#767776"><a class="anchor_tags" href="https://github.com/malikdesigner/"
                                target="_blank">Github</a></div>
                        <div style="color:#767776"><a class="anchor_tags"
                                href="https://www.linkedin.com/in/naveed-malik-16a42a182/" target="_blank">LinkedIn</a>
                        </div>
                        <div style="color:#767776"><a class="anchor_tags"
                                href="https://www.facebook.com/profile.php?id=61584345741891"
                                target="_blank">Facebook</a></div>
                        <div style="color:#767776"><a class="anchor_tags"
                                href="https://www.instagram.com/studiotechhive/" target="_blank">Instagram</a></div>
                    </div>

                    <!-- Contact Me Section -->
                    <div class="col-md-6 contact-info">
                        <div style="color:white">
                            <h5>Contact Me</h5>
                        </div>
                        <div style="color:#767776"><a href="mailto:navidml6453@gmail.com"
                                class="anchor_tags">navidml6453@gmail.com</a>
                        </div>
                        <div style="color:#767776"><a href="https://wa.link/rymhg3" class="anchor_tags"
                                target="_blank">+974 31533910</a>
                        </div>
                        <div style="color:#767776"><a href="https://wa.link/i3g8v9" class="anchor_tags"
                                target="_blank">+92 337 8277733</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <a href="mailto:navidml6453@gmail.com" class="message_me btn-custom">Message Me</a>
            </div>
            <div class="col-lg-5">
                <a href="Naveed_Malik_Software_Engr.pdf" download class="get_my_cv btn-custom">GET MY CV</a>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="footer-container">
            <!-- Social Media Icons -->
            <div class="social-media-icons">
                <a href="https://www.facebook.com/profile.php?id=61584345741891" target="_blank" class="social-icon"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/studiotechhive/" target="_blank" class="social-icon"><i
                        class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/naveed-malik-16a42a182/" target="_blank" class="social-icon"><i
                        class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/malikdesigner/" target="_blank" class="social-icon"><i
                        class="fab fa-github"></i></a>
            </div>

            <!-- Footer Text -->
            <div class="footer-text-container">
                <p class="footer-text">&copy; 2024 Naveed Malik. All rights reserved.</p>
                <p class="footer-text">Designed by <a href="https://github.com/malikdesigner/" target="_blank"
                        class="footer-text">Naveed Malik</a></p>
            </div>
        </div>

    </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.profile-image');
    let currentIndex = 0;

    function showNextImage() {
        images[currentIndex].style.opacity = 0;
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].style.opacity = 1;
        setTimeout(showNextImage, 3000);
    }

    if (images.length > 0) {
        showNextImage();
    }

    AOS.init({
        duration: 1000,
        once: true,
    });

    function switchTab(tabId) {
        const tabPanes = document.querySelectorAll('.tab-pane');
        tabPanes.forEach(pane => {
            const progressBars = pane.querySelectorAll('.progress-bar');
            progressBars.forEach(bar => bar.style.width = '0%');
            pane.classList.remove('show', 'active');
        });

        const activePane = document.getElementById(tabId);
        if (activePane) {
            activePane.classList.add('show', 'active');
            const progressBars = activePane.querySelectorAll('.progress-bar');
            setTimeout(() => {
                progressBars.forEach(bar => {
                    const percentage = bar.getAttribute('data-percentage');
                    bar.style.width = percentage + '%';
                });
            }, 50);
        }

        const tabButtons = document.querySelectorAll('.btn-group-vertical .btn');
        tabButtons.forEach(button => button.classList.remove('active'));
        const activeButton = document.querySelector(`.btn-group-vertical .btn[data-tab="${tabId}"]`);
        if (activeButton) {
            activeButton.classList.add('active');
        }
    }

    const tabButtons = document.querySelectorAll('.btn-group-vertical .btn');
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const tabId = button.getAttribute('data-tab');
            switchTab(tabId);
        });
    });

    switchTab('frontend');

    const slides = document.querySelector('.testimonials__slides');
    if (slides) {
        const slideWidth = slides.querySelector('.testimonials__slide').clientWidth;
        const totalSlides = slides.children.length;
        let currentIndexs = 0;

        document.querySelector('.arrow--right').addEventListener('click', function() {
            if (currentIndexs < totalSlides - 1) {
                currentIndexs++;
            } else {
                currentIndexs = 0;
            }
            slides.style.transform = `translateX(-${currentIndexs * slideWidth}px)`;
        });

        document.querySelector('.arrow--left').addEventListener('click', function() {
            if (currentIndexs > 0) {
                currentIndexs--;
            } else {
                currentIndexs = totalSlides - 1;
            }
            slides.style.transform = `translateX(-${currentIndexs * slideWidth}px)`;
        });
    }

    // Navbar scroll effect
    const navbar = document.querySelector('.modern-navbar');
    const navLinks = document.querySelectorAll('.nav-link-modern');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    const sections = document.querySelectorAll('section[id]');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current)) {
                link.classList.add('active');
            }
        });
    });
});
</script>

</html>