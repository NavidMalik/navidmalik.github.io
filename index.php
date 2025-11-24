<!-- index.php -->
<?php include 'header.php'; ?>
<!-- <style>
    /* Home Section */
    #home {
        position: relative;
        background-image: url('./images/services-bg-color.jpg');
        background-size: cover;
        background-position: center;
        color: #fff;
        /* Ensure text color contrasts with background */
    }

    .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border: 5px solid #cf1767;
        /* Keeps the border */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 0 20px 5px rgba(207, 23, 103, 0.7);
        /* Adds glow */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        /* Smooth transition */
    }

    .profile-image:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 0 25px 10px rgba(207, 23, 103, 1);
        /* Enhance glow on hover */
    }

    .text-content {
        text-align: left;
        position: relative;
    }

    .text-content h2 {
        color: white;
    }

    /* Add this to your existing CSS */
    .typing-container {
        font-size: 4.0rem;
        font-weight: 500;
        white-space: nowrap;
        overflow: hidden;
        color: #cf1767;
        height: 6.5rem;
        /* Set a fixed height based on the largest text */
        display: inline-block;
    }

    /* Add/Replace these styles in styles.css for the home section */

    /* Home Section */
    #home {
        position: relative;
        background-image: url('./images/services-bg-color.jpg');
        background-size: cover;
        background-position: center;
        color: #fff;
    }

    .image-column {
        position: relative;
        padding: 2rem;
    }

    .profile-image-wrapper {
        position: relative;
        width: 350px;
        height: 350px;
        margin: 0 auto;
    }

    .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid #cf1767;
        box-shadow:
            0 0 0 10px rgba(207, 23, 103, 0.2),
            0 0 0 20px rgba(207, 23, 103, 0.1),
            0 10px 40px rgba(207, 23, 103, 0.6),
            0 0 100px rgba(207, 23, 103, 0.4);
        transition: all 0.5s ease;
        position: relative;
        z-index: 2;
        animation: float 6s ease-in-out infinite;
    }

    .profile-image:hover {
        transform: scale(1.05) rotate(5deg);
        box-shadow:
            0 0 0 15px rgba(207, 23, 103, 0.3),
            0 0 0 30px rgba(207, 23, 103, 0.15),
            0 15px 50px rgba(207, 23, 103, 0.8),
            0 0 120px rgba(255, 20, 147, 0.6);
        border-color: #ff1493;
    }

    /* Animated rings around profile image */
    .profile-image-wrapper::before,
    .profile-image-wrapper::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        border: 2px solid #cf1767;
        opacity: 0;
        animation: pulse-ring 3s ease-out infinite;
    }

    .profile-image-wrapper::before {
        width: 100%;
        height: 100%;
        animation-delay: 0s;
    }

    .profile-image-wrapper::after {
        width: 100%;
        height: 100%;
        animation-delay: 1.5s;
    }

    /* Decorative dots around image */
    .profile-image-wrapper .decorative-dot {
        position: absolute;
        width: 15px;
        height: 15px;
        background: #cf1767;
        border-radius: 50%;
        box-shadow: 0 0 20px rgba(207, 23, 103, 0.8);
        animation: rotate-dots 10s linear infinite;
    }

    .profile-image-wrapper .decorative-dot:nth-child(1) {
        top: 10%;
        right: 10%;
    }

    .profile-image-wrapper .decorative-dot:nth-child(2) {
        bottom: 10%;
        left: 10%;
        animation-delay: -5s;
    }

    .profile-image-wrapper .decorative-dot:nth-child(3) {
        top: 50%;
        right: 0;
        animation-delay: -2.5s;
    }

    .profile-image-wrapper .decorative-dot:nth-child(4) {
        bottom: 20%;
        right: 15%;
        animation-delay: -7.5s;
    }

    /* Gradient overlay effect */
    .profile-image-wrapper .gradient-border {
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        border-radius: 50%;
        background: linear-gradient(45deg, #cf1767, #ff1493, #cf1767);
        z-index: 1;
        opacity: 0.3;
        animation: rotate-gradient 8s linear infinite;
    }

    /* Animations */
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes pulse-ring {
        0% {
            width: 100%;
            height: 100%;
            opacity: 0.5;
        }

        100% {
            width: 140%;
            height: 140%;
            opacity: 0;
        }
    }

    @keyframes rotate-dots {
        0% {
            transform: rotate(0deg) translateX(180px) rotate(0deg);
        }

        100% {
            transform: rotate(360deg) translateX(180px) rotate(-360deg);
        }
    }

    @keyframes rotate-gradient {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Particle effect */
    .profile-image-wrapper .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: #cf1767;
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(207, 23, 103, 0.8);
        animation: float-particle 4s ease-in-out infinite;
    }

    .profile-image-wrapper .particle:nth-child(5) {
        top: 20%;
        left: 15%;
        animation-delay: 0s;
    }

    .profile-image-wrapper .particle:nth-child(6) {
        top: 60%;
        right: 20%;
        animation-delay: 1s;
    }

    .profile-image-wrapper .particle:nth-child(7) {
        bottom: 30%;
        left: 25%;
        animation-delay: 2s;
    }

    .profile-image-wrapper .particle:nth-child(8) {
        top: 40%;
        right: 15%;
        animation-delay: 3s;
    }

    @keyframes float-particle {

        0%,
        100% {
            transform: translateY(0) translateX(0);
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        90% {
            opacity: 1;
        }

        50% {
            transform: translateY(-30px) translateX(10px);
        }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .profile-image-wrapper {
            width: 250px;
            height: 250px;
        }

        @keyframes rotate-dots {
            0% {
                transform: rotate(0deg) translateX(130px) rotate(0deg);
            }

            100% {
                transform: rotate(360deg) translateX(130px) rotate(-360deg);
            }
        }
    }

    .text-content {
        text-align: left;
        position: relative;
    }

    .text-content h2 {
        color: white;
    }

    .typing-container {
        font-size: 4.0rem;
        font-weight: 500;
        white-space: nowrap;
        overflow: hidden;
        color: #cf1767;
        height: 6.5rem;
        display: inline-block;
    }
</style> -->

<style>
/* Replace the profile image styles in styles.css */

/* Home Section */
#home {
    position: relative;
    background-image: url('./images/services-bg-color.jpg');
    background-size: cover;
    background-position: center;
    color: #fff;
    overflow: hidden;
}

.image-column {
    position: relative;
    padding: 2rem;
}

.profile-image-wrapper {
    position: relative;
    width: 400px;
    height: 500px;
    margin: 0 auto;
    perspective: 1000px;
}

/* Hexagon Shape */
.profile-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    border: none;
    position: relative;
    z-index: 2;
    animation: float 6s ease-in-out infinite;
    filter: drop-shadow(0 0 30px rgba(207, 23, 103, 0.8)) drop-shadow(0 0 60px rgba(255, 20, 147, 0.6));
    transition: all 0.5s ease;
}

.profile-image:hover {
    transform: scale(1.05) rotateY(10deg);
    filter: drop-shadow(0 0 40px rgba(207, 23, 103, 1)) drop-shadow(0 0 80px rgba(255, 20, 147, 0.8));
}

/* Animated border frame */
.profile-image-wrapper::before {
    content: '';
    position: absolute;
    top: -10px;
    left: -10px;
    right: -10px;
    bottom: -10px;
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    background: linear-gradient(45deg, #cf1767, #ff1493, #cf1767, #ff1493);
    background-size: 300% 300%;
    z-index: 1;
    animation: gradient-shift 4s ease infinite;
    opacity: 0.6;
}

.profile-image-wrapper::after {
    content: '';
    position: absolute;
    top: -20px;
    left: -20px;
    right: -20px;
    bottom: -20px;
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    background: linear-gradient(90deg, transparent, #cf1767, transparent);
    z-index: 0;
    animation: rotate-border 3s linear infinite;
    opacity: 0.4;
}

/* Geometric decorative elements */
.geometric-shape {
    position: absolute;
    border: 2px solid #cf1767;
    opacity: 0.3;
    animation: rotate-shape 20s linear infinite;
}

.geometric-shape.triangle {
    width: 0;
    height: 0;
    border-left: 50px solid transparent;
    border-right: 50px solid transparent;
    border-bottom: 86px solid #cf1767;
    top: -50px;
    right: -30px;
    animation: float-triangle 5s ease-in-out infinite;
}

.geometric-shape.square {
    width: 60px;
    height: 60px;
    bottom: -20px;
    left: -20px;
    transform: rotate(45deg);
    animation: rotate-square 8s linear infinite;
}

.geometric-shape.diamond {
    width: 40px;
    height: 40px;
    background: transparent;
    border: 3px solid #ff1493;
    transform: rotate(45deg);
    top: 50%;
    right: -40px;
    animation: pulse-diamond 3s ease-in-out infinite;
}

/* Glowing orbs */
.glowing-orb {
    position: absolute;
    width: 20px;
    height: 20px;
    background: radial-gradient(circle, #ff1493, #cf1767);
    border-radius: 50%;
    box-shadow: 0 0 30px rgba(207, 23, 103, 0.8);
    animation: float-orb 6s ease-in-out infinite;
}

.glowing-orb:nth-child(1) {
    top: 10%;
    left: -10%;
    animation-delay: 0s;
}

.glowing-orb:nth-child(2) {
    bottom: 15%;
    right: -10%;
    animation-delay: 2s;
}

.glowing-orb:nth-child(3) {
    top: 60%;
    left: -15%;
    animation-delay: 4s;
}

/* Light rays effect */
.light-ray {
    position: absolute;
    width: 2px;
    height: 150px;
    background: linear-gradient(to bottom, transparent, #cf1767, transparent);
    opacity: 0.3;
    animation: ray-rotate 10s linear infinite;
}

.light-ray:nth-child(1) {
    top: 50%;
    left: 50%;
    transform-origin: top center;
}

.light-ray:nth-child(2) {
    top: 50%;
    left: 50%;
    transform-origin: top center;
    animation-delay: -3.33s;
}

.light-ray:nth-child(3) {
    top: 50%;
    left: 50%;
    transform-origin: top center;
    animation-delay: -6.66s;
}

/* Hexagonal grid background */
.hex-grid {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0.1;
    z-index: 0;
}

.hex-grid::before,
.hex-grid::after {
    content: '';
    position: absolute;
    width: 100px;
    height: 100px;
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    border: 1px solid #cf1767;
}

.hex-grid::before {
    top: 10%;
    right: 5%;
    animation: pulse-hex 4s ease-in-out infinite;
}

.hex-grid::after {
    bottom: 10%;
    left: 5%;
    animation: pulse-hex 4s ease-in-out infinite 2s;
}

/* Animations */
@keyframes float {

    0%,
    100% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(-20px);
    }
}

@keyframes gradient-shift {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}

@keyframes rotate-border {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

@keyframes rotate-shape {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

@keyframes float-triangle {

    0%,
    100% {
        transform: translateY(0) rotate(0deg);
    }

    50% {
        transform: translateY(-30px) rotate(180deg);
    }
}

@keyframes rotate-square {
    0% {
        transform: rotate(45deg) scale(1);
    }

    50% {
        transform: rotate(225deg) scale(1.2);
    }

    100% {
        transform: rotate(405deg) scale(1);
    }
}

@keyframes pulse-diamond {

    0%,
    100% {
        transform: rotate(45deg) scale(1);
        opacity: 0.3;
    }

    50% {
        transform: rotate(45deg) scale(1.5);
        opacity: 0.8;
    }
}

@keyframes float-orb {

    0%,
    100% {
        transform: translateY(0) translateX(0);
    }

    33% {
        transform: translateY(-30px) translateX(20px);
    }

    66% {
        transform: translateY(-10px) translateX(-15px);
    }
}

@keyframes ray-rotate {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

@keyframes pulse-hex {

    0%,
    100% {
        transform: scale(1);
        opacity: 0.1;
    }

    50% {
        transform: scale(1.2);
        opacity: 0.3;
    }
}

/* Responsive */
@media (max-width: 768px) {
    .profile-image-wrapper {
        width: 300px;
        height: 375px;
    }

    .geometric-shape.triangle {
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;
        border-bottom: 52px solid #cf1767;
    }

    .geometric-shape.square {
        width: 40px;
        height: 40px;
    }
}

.text-content {
    text-align: left;
    position: relative;
}

.text-content h2 {
    color: white;
}

.typing-container {
    font-size: 4.0rem;
    font-weight: 500;
    white-space: nowrap;
    overflow: hidden;
    color: #cf1767;
    height: 6.5rem;
    display: inline-block;
}
</style>
<!-- Home Section -->
<!-- Update the home section in index.php -->
<section id="home" class="d-flex align-items-center vh-100">
    <div class="container text-center text-md-start">
        <div class="row">
            <div
                class="col-md-7 d-flex flex-column justify-content-left align-items-left align-self-center text-content">
                <h1>Hello, I am </h1>
                <div id="typing-container" class="typing-container"></div>
                <p>
                    I am a highly skilled Software Developer, with knowledge of various tools and languages and eager to
                    learn new skills, which I can utilize for the wellbeing of the company.
                </p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 d-flex justify-content-center align-items-center image-column">
                <div class="profile-image-wrapper">
                    <div class="hex-grid"></div>
                    <img src="./images/my_profile.png" alt="Your Image" class="profile-image">
                    <div class="geometric-shape triangle"></div>
                    <div class="geometric-shape square"></div>
                    <div class="geometric-shape diamond"></div>
                    <div class="glowing-orb"></div>
                    <div class="glowing-orb"></div>
                    <div class="glowing-orb"></div>
                    <div class="light-ray"></div>
                    <div class="light-ray"></div>
                    <div class="light-ray"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
const texts = [
    "Naveed Malik",
    "Web Developer",
    "Mobile App Developer",
    "React Js Developer",
    "PHP Developer",
    "Full Stack Developer"
];

const typingSpeed = 100; // milliseconds per character
const deletingSpeed = 50; // milliseconds per character
const pauseBetweenTexts = 1500; // milliseconds between texts

function typeText(element, text, callback) {
    let index = 0;

    function type() {
        if (index < text.length) {
            element.textContent += text[index++];
            setTimeout(type, typingSpeed);
        } else {
            setTimeout(callback, pauseBetweenTexts);
        }
    }
    type();
}

function deleteText(element, callback) {
    let text = element.textContent;
    let index = text.length;

    function deleteChar() {
        if (index > 0) {
            element.textContent = text.substring(0, index--);
            setTimeout(deleteChar, deletingSpeed);
        } else {
            element.textContent = ''; // Ensure text is fully cleared
            setTimeout(callback, pauseBetweenTexts);
        }
    }
    deleteChar();
}

function cycleTexts() {
    const container = document.getElementById('typing-container');
    let i = 0;

    function next() {
        typeText(container, texts[i], () => {
            deleteText(container, () => {
                i = (i + 1) % texts.length; // Move to next text
                next(); // Continue animation
            });
        });
    }
    next();
}

cycleTexts();
</script>


<!-- Home Section -->
<!-- <section id="home" class="d-flex align-items-center vh-100" style="background-image: url('./images/services-bg-color.jpg'); background-size: cover;">
    <div class="container text-center text-md-start">
        <div class="row">
            <div class="col-md-8 d-flex flex-column justify-content-left align-items-left align-self-center">
                <h5 style="color:#cf1767">Hello, I'm Naveed Malik</h5>
                <h1 style="font-size:4.8rem;font-weight:500;">
                    Web Developer <br />
                    and Mobile App Developer <br />
                    Based In<br />
                    Islamabad.
                </h1>
            </div>
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center image-column">
                <img src="./images/my_profile.png" alt="Your Image" class="img-fluid rounded-circle profile-image">
            </div>
        </div>
    </div>
</section> -->

<!-- About Section -->
<section id="about" class="s-about py-5">
    <div class="container">
        <div class="row heading-block" data-aos="fade-up">
            <div class="col-lg-12">
                <h2 class="section-heading">About Me</h2>
            </div>
        </div>
        <div class="row about-me__content" data-aos="fade-up">
            <div class="col-lg-12 about-me__text">
                <div class="row">
                    <div class="col-lg-5">
                        <p class="lead">
                            I have a great passion for development and mainly regarding web
                            and app development. There are many things that make me passionate
                            about web development.
                        </p>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5">
                        <p>
                            The pace at which the changes are happening, needs continuous
                            learning, competitiveness among frameworks which is healthy and
                            brings the best out of them.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <p>
                            The major thing that dragged me into web development is to look at
                            my code changes in an instance and deciding or improving my code.
                        </p>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5">
                        <p>
                            It's highly practical looking at the immediate changes that happen
                            on your webpage and fix them accordingly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row about-me__buttons">
            <div class="col-lg-5 tab-full" data-aos="fade-up">
                <a href="#contact" class="btn btn--stroke w-100">Hire Me</a>
            </div>
            <div class="col-lg-2 tab-full" data-aos="fade-up">
            </div>
            <div class="col-lg-5 tab-full" data-aos="fade-up">
                <a href="Naveed_Malik_Software_Engr.pdf" download class="message_me btn-custom">Download CV</a>
            </div>
        </div>
    </div>
</section>
<!-- Work Experience Section -->
<section id="work-experience" class="py-5">
    <div class="container">
        <h2 class="section-heading text-center">Work Experience & Education</h2>
        <div class="row" style="margin-left: -4%;">
            <div class="col-md-6 work-item" data-aos="fade-up">
                <div class="work-item-content">
                    <div class="work-item-icon-top">
                        <i class="fas fa-briefcase"></i>
                    </div>

                    <!-- NEW COMPANY (CURRENT JOB) -->
                    <div class="text-center">
                        <a href="#" target="_blank">
                            <img src="./images/profile/Onex.png" style="width:200px;height:200px" alt="Company Logo"
                                class="company-logo image-transition">
                        </a>
                    </div>

                    <div class="work-content">
                        <div class="work-header">
                            <p class="timeline__timeframe">Oct 2025 - Present</p>
                            <h5>Onex Trading and Contracting Services</h5>
                            <p class="lead">Senior Full Stack Developer</p>
                        </div>

                        <p class="work-description">
                            • Lead the architectural design and development of enterprise-grade automation
                            platforms.<br />
                            • Build scalable microservices and REST APIs that support high-volume, real-time
                            operations.<br />
                            • Implement advanced system integrations across procurement, logistics, and ERP
                            solutions.<br />
                            • Develop secure and high-performance dashboards for project tracking and operational
                            analytics.<br />
                            • Optimize cloud deployments and CI/CD pipelines to reduce downtime and enhance
                            reliability.<br />
                            • Design workflow engines for automating contracting, invoicing, and internal approval
                            cycles.<br />
                            • Ensure robust data validation, monitoring, and structured reporting for executive
                            insights.<br />
                            • Collaborate with cross-functional teams to translate business requirements into technical
                            solutions.<br />
                            • Conduct performance audits, security enhancements, and long-term system scaling
                            improvements.<br />
                        </p>
                    </div>

                    <!-- MCP Insight -->
                    <div class="text-center">
                        <a href="https://mcpinsight.com/" target="_blank">
                            <img src="./images/mcpinsight-bg-login.png" style="width:200px;height:200px"
                                alt="Company Logo" class="company-logo image-transition">
                        </a>
                    </div>

                    <div class="work-content">
                        <div class="work-header">
                            <p class="timeline__timeframe">March 2022 - Oct 2025</p>
                            <h5>MCP INSIGHT</h5>
                            <p class="lead">Full Stack Developer</p>
                        </div>
                        <p class="work-description">
                            • Responsible for maintaining, expanding and scaling the dashboard of MCP Shield, one of
                            product of the company.<br />
                            • Adding new features to the MCP Shield product, build on CodeIgniter framework.<br />
                            • Write well designed, testable, efficient code by using best software development
                            practices.<br />
                            • Optimize the scraping capability to ensure the data is scrapped efficiently with the
                            minimum usage of server bandwidth.<br />
                            • Develop highly reliable web crawlers and parsers across various websites.<br />
                            • Extract structured/unstructured data and store them into Json Format in elastic
                            search.<br />
                            • Develop frameworks for automating and maintaining a constant flow of data from multiple
                            sources.<br />
                            • Develop a deep understanding of the data sources on the web and know exactly how, when,
                            and which data to scrape, parse and store this data.<br />
                            • Active participation in troubleshooting and debugging.<br />
                            • Creating efficient web crawlers. Create more/better ways to crawl relevant
                            information.<br />
                            • Familiarity with best practices and design patterns of programming languages.<br />
                        </p>
                    </div>

                    <!-- NEOC -->
                    <div class="text-center">
                        <a href="https://epi.gov.pk/emergency-operations-center/" target="_blank">
                            <img src="https://www.eoc.gov.pk/assets/images/eoc-logo_old.png"
                                style="width:200px;height:200px" alt="Company Logo"
                                class="company-logo image-transition">
                        </a>
                    </div>
                    <div class="work-content">
                        <div class="work-header">
                            <p class="timeline__timeframe">Jul 2019 - March 2022</p>
                            <h5>NEOC</h5>
                            <p class="lead">Frontend Developer</p>
                        </div>
                        <p class="work-description">
                            • Leverage the inbuilt React toolkit for creating frontend features.<br />
                            • Create data visualization tools, libraries, and reusable code for prospects.<br />
                            • Integrate designs and wireframes within the application code.<br />
                            • Monitor interaction of users and convert them into insightful information.<br />
                            • Write application interface code with JavaScript.<br />
                            • Enhance application performance with constant monitoring.<br />
                            • Translate wireframes and designs into good quality code.<br />
                            • Optimize components to work seamlessly across different browsers and devices.<br />
                            • Good understanding of CSS libraries, GIT, Sigma, Adobe XD etc.<br />
                            • Proper user information authentication.<br />
                            • Develop responsive web-based UI.<br />
                        </p>
                    </div>
                </div>
            </div>

            <!-- Education Column (unchanged) -->
            <div class="col-md-6 work-item" data-aos="fade-up">
                <div class="work-item-content">
                    <div class="work-item-icon-top">
                        <i class="fas fa-graduation-cap"></i>
                    </div>

                    <div class="text-center">
                        <a href="https://nust.edu.pk/" target="_blank">
                            <img src="./images/profile/NUST-Signature-01.png" style="width:200px;height:200px"
                                alt="Company Logo" class="image-transition company-logo">
                        </a>
                    </div>
                    <div class="work-content">
                        <div class="work-header">
                            <p class="timeline__timeframe">September 2015 - July 2019</p>
                            <h5>NUST</h5>
                            <p class="lead">BS COMPUTER ENGINEERING</p>
                        </div>
                        <p class="work-description">
                            I was the average student in my University but was involved
                            with different technical competition like COMPAC(One of
                            biggest in our college)<br />
                            I had done different type of projects in my university and
                            few of them i have displayed in my portfolio
                        </p>
                    </div>

                    <div class="text-center">
                        <a href="https://cch.edu.pk/" target="_blank">
                            <img src="./images/profile/cch.png" style="width:200px;height:200px" alt="Company Logo"
                                class="company-logo image-transition">
                        </a>
                    </div>
                    <div class="work-content">
                        <div class="work-header">
                            <p class="timeline__timeframe">September 2010 - July 2015</p>
                            <h5>CADET COLLEGE HASANABDAL</h5>
                            <p class="lead">FSC & Matriculation</p>
                        </div>
                        <p class="work-description">
                            I was Vice President of College Computer, was involved in
                            other sports, Vice Captain Wing Football team, Vice Caption
                            College Gymnastics team
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Technical Proficiency Section -->
<section id="technical-proficiency" class="t-proficiency ss-dark">
    <div class="shadow-overlay"></div> <!-- Add this line -->

    <div class="container">
        <div class="row heading-block" data-aos="fade-up">
            <div class="col-lg-12">
                <h2 class="section-heading">Technical Proficiency</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="btn-group-vertical w-100 row">
                    <div class="col-md-7 mb-3">
                        <button class="btn btn-primary w-100 btn-lg" data-tab="frontend">Frontend Skills</button>
                        <button class="btn btn-primary w-100 btn-lg" data-tab="backend">Backend Skills</button>
                    </div>
                    <div class="col-md-7 mb-3">
                        <button class="btn btn-primary w-100 btn-lg" data-tab="tools">Tools Used</button>
                        <button class="btn btn-primary w-100 btn-lg" data-tab="soft-skills">Soft Skills</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content">
                    <!-- Frontend Skills -->
                    <div class="tab-pane" id="frontend">
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">React Js</h5>
                            <span class="ms-auto">70%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="70"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">React Native</h5>
                            <span class="ms-auto">75%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="75"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">HTML5</h5>
                            <span class="ms-auto">90%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="90"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">CSS3</h5>
                            <span class="ms-auto">85%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="85"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Bootstrap</h5>
                            <span class="ms-auto">85%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="85"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Javascript</h5>
                            <span class="ms-auto">80%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="80"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Jquery</h5>
                            <span class="ms-auto">80%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="80"></div>
                        </div>
                        <!-- Add more frontend skills as needed -->
                    </div>

                    <!-- Backend Skills -->
                    <div class="tab-pane" id="backend">
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Node.js</h5>
                            <span class="ms-auto">70%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="70"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Python</h5>
                            <span class="ms-auto">60%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="75"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Php</h5>
                            <span class="ms-auto">85%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="80"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Elasticsearch</h5>
                            <span class="ms-auto">70%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="70"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Mysql</h5>
                            <span class="ms-auto">80%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="80"></div>
                        </div>
                        <!-- Add more backend skills as needed -->
                    </div>

                    <!-- Tools Used -->
                    <div class="tab-pane" id="tools">
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Git</h5>
                            <span class="ms-auto">85%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="85"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Docker</h5>
                            <span class="ms-auto">60%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="60"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Linux</h5>
                            <span class="ms-auto">70%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="70"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Visual Studio Code</h5>
                            <span class="ms-auto">90%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="90"></div>
                        </div>
                        <!-- Add more tools as needed -->
                    </div>

                    <!-- Soft Skills -->
                    <div class="tab-pane" id="soft-skills">
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Communication</h5>
                            <span class="ms-auto">90%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="90"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Teamwork</h5>
                            <span class="ms-auto">85%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="85"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Problem Solving</h5>
                            <span class="ms-auto">80%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="80"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Collaboration</h5>
                            <span class="ms-auto">75%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="75"></div>
                        </div>
                        <!-- Add more soft skills as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="capabilities" class="py-5">
    <div class="container">
        <div class="row heading-block" data-aos="fade-up">
            <div class="col-lg-12" style="text-align: center;">
                <h2 class="section-heading">Capabilities</h2>
            </div>
        </div>
        <div class="row d-flex flex-column justify-content-center align-items-center align-self-center">
            <div class="col-md-1"></div>
            <div class="col-md-10 ">
                <p class="text-justify"
                    style='font-family: "Frank Ruhl Libre", serif; font-size: 4.4rem; font-weight: 300; line-height: 1.159; letter-spacing: -0.05rem; color: #000000;'>
                    My passion and goal is to help you make your business standout.
                </p>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>

<section id="services" class="s-services ss-dark ">
    <div class="shadow-overlay"></div>

    <div class="container">
        <div class="row heading-block" data-aos="fade-up">
            <div class="col-lg-12">
                <h2 class="section-heading">Services</h2>
            </div>
        </div>
        <div class="row services-list block-large-1-3 block-medium-1-2 block-tab-full">
            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Web Design</h4>
                    <p>
                        I have a good expeience in web development with vast technologies.
                        My best techstack is React with Node js. Also work with Wordpress
                        as a freelancer, including HTML, CSS, BootStrap, PHP and many
                        others I take a proactive approach to web development and
                        elaborate on ways to uncover less obvious business requirements,
                        save costs and envisage risks for your website and make the
                        project up-to the clients requirement.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Mobile Design</h4>
                    <p>
                        I have good experience with React Native techstack, also work with
                        Java & XML for native mobile apps. I offer a full cycle of
                        application design, integration and management services. Whether
                        it is a consumer oriented app or a transformative enterprise-class
                        solution, the company leads the entire mobile app development
                        process from ideation and concept to delivery, and to ongoing
                        ongoing support.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Brand Identity</h4>
                    <p>
                        I have been doing freelancing for many clients in my own country
                        for their brand identity, like logo design, business card,
                        invitation cards, packaging designs and many other stuffs.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">UI/UX Design</h4>
                    <p>
                        I create clean, modern, and user-friendly UI/UX designs using Adobe XD
                        and Illustrator. I focus on delivering intuitive layouts, smooth user
                        flows, and visually appealing interfaces that match the client’s brand
                        identity and enhance the overall user experience.
                    </p>
                </div>
            </div>


            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Illustration</h4>
                    <p>
                        I design unique and creative illustrations, characters, and concepts
                        tailored to client needs. With a strong artistic vision and attention
                        to detail, I deliver original artwork that blends style, storytelling,
                        and professional digital drawing techniques.
                    </p>
                </div>
            </div>


            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Web Automation</h4>
                    <p>
                        I develop powerful web automations to help businesses save time and reduce manual work.
                        From automating repetitive browser tasks to extracting data, submitting forms, monitoring
                        dashboards,
                        and integrating APIs, I build smart automation solutions based on your needs. Whether it's a
                        one-time
                        process or a complete workflow automation, I deliver fast, reliable, and scalable results.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Projects Section -->
<!-- <section id="projects" class="py-5">
    <div class="container">
        <h2 class="text-center">Projects</h2>
        <p class="text-center">Brief description of projects.</p>
    </div>
</section> -->
<?php include 'portfolio_home.php'; ?>
<?php include 'automation_demos.php'; ?>

<?php include 'testimonials.php'; ?>
<?php include 'fiverr_reviews.php' ?>
<?php include 'footer.php'; ?>