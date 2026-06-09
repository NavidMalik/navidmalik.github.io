// cv_switcher.js - Handle country-based CV/Resume switching
document.addEventListener('DOMContentLoaded', () => {
    // Get country from URL parameter
    const urlParams = new URLSearchParams(window.location.search);
    const country = (urlParams.get('country') || 'pakistan').toLowerCase();

    // Validate country parameter
    const validCountries = ['qatar', 'pakistan'];
    const selectedCountry = validCountries.includes(country) ? country : 'pakistan';

    // Store selected country in localStorage for persistence
    localStorage.setItem('selectedCountry', selectedCountry);

    // Function to update CV content based on country
    function updateCVContent(selectedCountry) {
        // Update phone numbers
        const phoneElements = document.querySelectorAll('[data-country-phone]');
        phoneElements.forEach(element => {
            const countries = element.getAttribute('data-country-phone').split(',');
            if (countries.includes(selectedCountry)) {
                element.style.display = '';
            } else {
                element.style.display = 'none';
            }
        });

        // Update work experience roles/descriptions
        const roleElements = document.querySelectorAll('[data-country-role]');
        roleElements.forEach(element => {
            const elementCountry = element.getAttribute('data-country-role');
            if (elementCountry === selectedCountry || elementCountry === 'all') {
                element.style.display = '';
            } else {
                element.style.display = 'none';
            }
        });

        // Update dates
        const dateElements = document.querySelectorAll('[data-country-date]');
        dateElements.forEach(element => {
            const elementCountry = element.getAttribute('data-country-date');
            if (elementCountry === selectedCountry) {
                element.style.display = '';
            } else {
                element.style.display = 'none';
            }
        });

        // Update logos
        const logoElements = document.querySelectorAll('[data-country-logo]');
        logoElements.forEach(element => {
            const elementCountry = element.getAttribute('data-country-logo');
            if (elementCountry === selectedCountry) {
                element.style.display = '';
            } else {
                element.style.display = 'none';
            }
        });

        // Update CV download links
        const cvElements = document.querySelectorAll('[data-country-cv]');
        cvElements.forEach(element => {
            const elementCountry = element.getAttribute('data-country-cv');
            if (elementCountry === selectedCountry) {
                element.style.display = '';
            } else {
                element.style.display = 'none';
            }
        });

        // Update WhatsApp links
        const whatsappElements = document.querySelectorAll('[data-country-whatsapp]');
        whatsappElements.forEach(element => {
            const elementCountry = element.getAttribute('data-country-whatsapp');
            if (elementCountry === selectedCountry) {
                element.style.display = '';
            } else {
                element.style.display = 'none';
            }
        });

        // Update CV download links if needed
        updateCVDownloads(selectedCountry);

        // Log current country for debugging
        console.log(`CV Content switched to: ${selectedCountry}`);
    }

    // Function to update CV download links
    function updateCVDownloads(selectedCountry) {
        const cvDownloadLinks = document.querySelectorAll('a[href$=".pdf"]');
        cvDownloadLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href.includes('CV') || href.includes('cv') || href.includes('Resume') || href.includes('resume')) {
                // You can customize CV file names per country if needed
                // For now, keeping the same CV for both
                // Example:
                // const newHref = `Naveed_Malik_${selectedCountry.toUpperCase()}_Resume.pdf`;
                // link.setAttribute('href', newHref);
            }
        });
    }

    // Apply initial country settings
    updateCVContent(selectedCountry);

    // Optional: Add URL update without page reload
    window.switchCountry = function(newCountry) {
        const validCountry = validCountries.includes(newCountry.toLowerCase()) ? newCountry.toLowerCase() : 'qatar';
        localStorage.setItem('selectedCountry', validCountry);

        // Update URL without reloading
        const newUrl = new URL(window.location);
        newUrl.searchParams.set('country', validCountry);
        window.history.pushState({}, '', newUrl);

        // Update content
        updateCVContent(validCountry);
    };

    // Add country selector to page (optional - comment out if not needed)
    // Uncomment below to add a visible country switcher in the UI
    /*
    const countrySwitcher = document.createElement('div');
    countrySwitcher.id = 'country-switcher';
    countrySwitcher.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        z-index: 999;
        background: var(--surface-color);
        padding: 10px 15px;
        border-radius: 30px;
        border: 1px solid var(--border-color);
        display: flex;
        gap: 10px;
    `;

    const qatarBtn = document.createElement('button');
    qatarBtn.textContent = 'Qatar';
    qatarBtn.style.cssText = `
        padding: 5px 15px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        background: ${selectedCountry === 'qatar' ? 'var(--primary-color)' : 'transparent'};
        color: ${selectedCountry === 'qatar' ? 'white' : 'var(--text-color)'};
        font-weight: 600;
        transition: all 0.3s ease;
    `;
    qatarBtn.onclick = () => window.switchCountry('qatar');

    const pakistanBtn = document.createElement('button');
    pakistanBtn.textContent = 'Pakistan';
    pakistanBtn.style.cssText = `
        padding: 5px 15px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        background: ${selectedCountry === 'pakistan' ? 'var(--primary-color)' : 'transparent'};
        color: ${selectedCountry === 'pakistan' ? 'white' : 'var(--text-color)'};
        font-weight: 600;
        transition: all 0.3s ease;
    `;
    pakistanBtn.onclick = () => window.switchCountry('pakistan');

    countrySwitcher.appendChild(qatarBtn);
    countrySwitcher.appendChild(pakistanBtn);
    document.body.appendChild(countrySwitcher);
    */
});
