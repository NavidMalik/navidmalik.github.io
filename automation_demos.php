<!-- automation_demos.php -->
<link rel="stylesheet" href="./automation_style.css">

<div class="row heading-block" data-aos="fade-up" style="margin-top: 5%; margin-left: 3%;">
    <div class="col-lg-12" style="text-align: center;">
        <h2 class="section-heading">Automation Demos</h2>
        <h3 class="section-subheading">Check out my web automation projects in action</h3>
    </div>
</div>

<div class="automation-slider">
    <div class="automation-contents-wrapper">
        <section class="automationRow">
            <?php
            $videoDir = './videos/';
            $videos = glob($videoDir . '*.{mp4,webm,avi,mov,mkv}', GLOB_BRACE);
            
            if (!empty($videos)) {
                foreach ($videos as $video) {
                    echo '<div class="automationItem active">
                            <div class="video-container">
                                <video src="' . $video . '" muted loop></video>
                                <div class="video-overlay">
                                    <button class="play-btn"><i class="fas fa-play"></i></button>
                                </div>
                            </div>
                          </div>';
                }
            } else {
                echo '<p>No videos found in the videos folder.</p>';
            }
            ?>
        </section>

        <section class="automation-indicators">
            <?php
            if (!empty($videos)) {
                $totalVideos = count($videos);
                $dotsNeeded = ceil($totalVideos / 3);
                
                for ($i = 0; $i < $dotsNeeded; $i++) {
                    $activeClass = ($i === 0) ? 'active' : '';
                    echo '<div class="auto-dot ' . $activeClass . '" attr="' . $i . '" onclick="switchAutomation(this)"></div>';
                }
            }
            ?>
        </section>
    </div>
</div>

<div id="videoModal" class="video-modal">
    <span class="close-modal">&times;</span>
    <div class="modal-content">
        <video id="modalVideo" controls></video>
    </div>
</div>

<script src="./automation_script.js"></script>