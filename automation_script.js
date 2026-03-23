const automations = [
  { video: "Connecting_Google_With_Account_!.mkv", title: "Automated Google Workspace Integration", desc: "A complete workflow automation for Google Account creation and multi-factor authentication handling." },
  { video: "Form_filling_pdf.mkv", title: "Automated PDF Form Filler", desc: "Extracting data and autonomously pushing it into complex PDF schemas." },
  { video: "GoogleTwoFactor.mkv", title: "Advanced Google 2FA Handler", desc: "Automated bypass and handling of Google's 2FA systems during robotic log-ins." },
  { video: "RealEstate_Scraper.mkv", title: "Real Estate Data Aggregator", desc: "High-speed web scraper extracting verified property listings across multiple dynamic real estate portals." },
  { video: "Reatuarant.mkv", title: "Restaurant Data Scraping", desc: "Menu and pricing intelligence gathering across extensive restaurant directories." },
  { video: "Shoestore.mkv", title: "Shoe Store Inventory Monitor", desc: "Constant inventory and pricing monitor for retail shoe outlets." },
  { video: "Tipster.mkv", title: "Tipster Automation Pipeline", desc: "Aggregating betting and tipster information in real-time." },
  { video: "Trading_Account.mkv", title: "Trading Account Automation", desc: "Automated macro commands and data logging for trading systems." },
  { video: "Trading_Account_data.mkv", title: "Trading Data Extractor", desc: "Intelligent data extraction from trading dashboards." },
  { video: "Travis_Scraper.mkv", title: "Travis Build Scraper", desc: "Monitoring and extracting build statuses from Travis CI pipelines." },
  { video: "YT_audio_Extractor.mkv", title: "YouTube Audio Extractor", desc: "Autonomous pipeline to extract and convert audio streams from YouTube sequences." },
  { video: "Youtube_Channel_uploading.mkv", title: "YouTube Bulk Uploader Pipeline", desc: "Automated publishing pipeline that schedules, tags, and bulk-uploads media to channel arrays." },
  { video: "igotstandard.mkv", title: "IGotStandard Automation", desc: "Custom scraping and macro pipelines tailored for specific client portals." },
  { video: "lemlist_scraper_test.mkv", title: "Lemlist Email Scraper", desc: "Targeted lead generation system aimed precisely at building Lemlist audiences." }
];

document.addEventListener('DOMContentLoaded', () => {
  const container = document.getElementById('automations-container');
  if (!container) return;

  let htmlContent = '';
  
  automations.forEach((auto, index) => {
    // Reverse layout for every second item
    const rowClass = index % 2 !== 0 ? 'flex-lg-row-reverse' : '';
    const padClass = index % 2 !== 0 ? 'pe-lg-5' : 'ps-lg-5';
    
    htmlContent += `
        <div class="row align-items-center mb-5 automation-feature ${rowClass}" data-aos="fade-up">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="video-player-premium glass-card overflow-hidden position-relative p-2"
                    style="border-radius: var(--border-radius-lg);">
                    <video src="./videos/${auto.video}" class="w-100 rounded"
                        style="border-radius: var(--border-radius-md);" autoplay muted loop playsinline controlslist="nodownload"></video>
                    <div class="video-overlay position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center"
                        style="background: rgba(15, 23, 42, 0.4); pointer-events: none; transition: opacity 0.3s ease;">
                        <button class="play-btn-premium btn btn-primary text-white rounded-circle shadow-lg"
                            style="width: 60px; height: 60px; pointer-events: auto;"><i
                                class="fas fa-play fa-lg ms-1"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 ${padClass}">
                <h4 class="fw-bold mb-3" style="color: var(--primary-color);">${auto.title}</h4>
                <p class="text-secondary small mb-4" style="color: var(--text-color) !important; opacity: 0.8;">${auto.desc}</p>
                <div class="impact-box p-3 rounded glass-card" style="border-left: 4px solid var(--primary-color);">
                    <p class="mb-0 small fw-bold"><i class="fas fa-cog me-2 text-primary"></i>Fully Automated Script</p>
                </div>
            </div>
        </div>
    `;
  });

  container.innerHTML = htmlContent;

  const players = document.querySelectorAll('.video-player-premium');
  players.forEach(player => {
      const video = player.querySelector('video');
      const btn = player.querySelector('.play-btn-premium');
      const overlay = player.querySelector('.video-overlay');

      if (btn && video) {
          btn.addEventListener('click', () => {
              if (video.paused) {
                  video.play();
                  overlay.style.opacity = '0';
              } else {
                  video.pause();
                  overlay.style.opacity = '1';
              }
          });
          video.addEventListener('play', () => {
              overlay.style.opacity = '0';
          });
          video.addEventListener('pause', () => {
              overlay.style.opacity = '1';
          });
          video.addEventListener('click', () => {
              if (!video.paused) {
                  video.pause();
                  overlay.style.opacity = '1';
              }
          });
          video.addEventListener('ended', () => {
              overlay.style.opacity = '1';
              video.currentTime = 0;
          });
          // If autoplay already fired before listeners were attached
          if (!video.paused) overlay.style.opacity = '0';
      }
  });
});