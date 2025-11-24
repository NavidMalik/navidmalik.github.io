<!-- fiverr_reviews.php - Alternative with scrollable option -->
<link rel="stylesheet" href="./fiverr_reviews_style.css">
<section class="fiverr-reviews-section">
    <div class="container">
        <div class="row heading-block" data-aos="fade-up">
            <div class="col-lg-12" style="text-align: center;">
                <h2 class="section-heading">Fiverr Client Reviews</h2>
                <h3 class="section-subheading">What my clients say about my work</h3>
            </div>
        </div>

        <div class="fiverr-reviews-wrapper">
            <button class="scroll-arrow scroll-left"><i class="fas fa-chevron-left"></i></button>
            <div class="reviews-container">
                <div class="reviews-slider">
                    <?php
                    $fiverrDir = './images/fiverr/';
                    $reviews = glob($fiverrDir . '*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
                    
                    if (!empty($reviews)) {
                        foreach ($reviews as $index => $review) {
                            $activeClass = ($index === 0) ? 'active' : '';
                            echo '<div class="review-card ' . $activeClass . '" data-aos="fade-up">
                                    <div class="fiverr-badge">
                                        <i class="fas fa-star"></i>
                                        <span>Fiverr Review</span>
                                    </div>
                                    <div class="review-screenshot review-screenshot-scrollable">
                                        <img src="' . $review . '" alt="Fiverr Review ' . ($index + 1) . '" class="review-image">
                                    </div>
                                  </div>';
                        }
                    } else {
                        echo '<p class="no-reviews">No reviews found. Please add review screenshots to the images/fiverr/ folder.</p>';
                    }
                    ?>
                </div>
            </div>
            <button class="scroll-arrow scroll-right"><i class="fas fa-chevron-right"></i></button>
        </div>

        <div class="review-indicators">
            <?php
            if (!empty($reviews)) {
                foreach ($reviews as $index => $review) {
                    $activeClass = ($index === 0) ? 'active' : '';
                    echo '<div class="indicator-dot ' . $activeClass . '" data-index="' . $index . '"></div>';
                }
            }
            ?>
        </div>

        <div class="fiverr-cta" data-aos="fade-up">
            <p>Want to work with me?</p>
            <a href="YOUR_FIVERR_PROFILE_URL" target="_blank" class="fiverr-btn">
                <i class="fas fa-external-link-alt"></i> View My Fiverr Profile
            </a>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="reviewLightbox" class="review-lightbox">
    <span class="lightbox-close">&times;</span>
    <img class="lightbox-content" id="lightboxImg">
</div>

<script src="./fiverr_reviews_script.js"></script>