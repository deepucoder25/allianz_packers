<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<section class="faqs-home-section py-5">
  <div class="container">
    <!-- Section Header (with truck graphic on left and map on right) -->
    <div class="row align-items-center mb-5 header-row">
      <!-- Left side: Moving truck -->
      <div class="col-lg-3 d-none d-lg-block text-left">
        <div class="header-truck-wrap">
          <img src="<?= base_url('assets/images/home_modules/moving_truck.jpg') ?>" class="header-truck-img" alt="<?= $company3?> Truck" loading="lazy">
        </div>
      </div>
      
      <!-- Center: Title and desc -->
      <div class="col-lg-6 col-md-12 text-center">
        <div class="services-home-header mb-0">
          <div class="services-home-accent text-uppercase mb-2">
            <span class="dot-accent">—</span> FAQS <span class="dot-accent">—</span>
          </div>
          <h2 class="services-home-title">We’ve Got <span>Answers</span></h2>
          <div class="services-home-divider mb-3"></div>
          <p class="services-home-desc">
            Find quick answers to common questions about our moving services.
          </p>
        </div>
      </div>
      
      <!-- Right side: World map -->
      <div class="col-lg-3 d-none d-lg-block text-right">
        <div class="header-map-wrap">
          <svg viewBox="0 0 900 400" fill="none" class="header-world-map">
            <defs>
              <pattern id="faq-dot-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <circle cx="10" cy="10" r="3.8" fill="#888888" />
              </pattern>
            </defs>
            <!-- North America -->
            <path d="M 80,70 C 80,60 120,40 160,50 C 200,60 210,30 220,50 C 230,70 260,90 280,100 C 290,110 320,110 320,120 C 310,130 290,140 280,150 C 270,160 280,180 270,190 C 260,200 240,210 220,190 C 200,170 190,170 170,180 C 150,190 140,210 130,220 C 120,230 110,210 100,190 C 90,170 80,150 90,120 C 100,90 80,80 80,70 Z" fill="url(#faq-dot-pattern)" />
            <!-- Greenland -->
            <path d="M 280,30 C 300,20 320,30 330,50 C 320,70 290,80 280,70 C 270,60 270,40 280,30 Z" fill="url(#faq-dot-pattern)" />
            <!-- South America -->
            <path d="M 220,200 C 250,210 260,230 270,250 C 280,270 270,300 250,340 C 230,380 210,400 200,410 C 190,410 180,380 180,340 C 180,300 190,260 220,200 Z" fill="url(#faq-dot-pattern)" />
            <!-- Africa -->
            <path d="M 420,180 C 460,160 510,160 540,200 C 560,220 560,250 540,290 C 520,330 490,370 470,390 C 455,400 445,380 440,360 C 435,340 415,310 405,290 C 395,270 390,240 405,210 C 420,180 410,190 420,180 Z" fill="url(#faq-dot-pattern)" />
            <!-- Europe -->
            <path d="M 400,100 C 420,70 450,70 470,90 C 480,110 460,130 440,140 C 420,150 410,140 400,120 C 390,110 395,100 400,100 Z" fill="url(#faq-dot-pattern)" />
            <!-- Asia -->
            <path d="M 470,90 C 510,70 560,60 620,60 C 680,60 780,50 820,80 C 850,110 870,160 850,210 C 830,260 800,280 750,270 C 700,260 660,240 620,250 C 580,260 550,230 520,240 C 490,250 470,220 490,180 C 510,140 480,120 470,90 Z" fill="url(#faq-dot-pattern)" />
            <!-- Australia -->
            <path d="M 750,300 C 780,290 820,310 830,340 C 830,370 790,390 750,380 C 720,370 710,330 750,300 Z" fill="url(#faq-dot-pattern)" />
            
            <!-- Dashed Moving Route Line (Animated) -->
            <path d="M 140,110 C 250,160 380,200 460,240 S 600,200 680,180" stroke="var(--brand-red)" stroke-width="5" stroke-dasharray="10 10" fill="none" opacity="0.9">
              <animate attributeName="stroke-dashoffset" from="20" to="0" dur="1.2s" repeatCount="indefinite" />
            </path>

            <!-- Traveling Pulse Dot along Route -->
            <g>
              <circle r="14" fill="var(--brand-red)" fill-opacity="0.4">
                <animateMotion path="M 140,110 C 250,160 380,200 460,240 S 600,200 680,180" dur="6s" repeatCount="indefinite" />
                <animate attributeName="r" from="7" to="18" dur="1.2s" repeatCount="indefinite" />
                <animate attributeName="fill-opacity" from="0.4" to="0" dur="1.2s" repeatCount="indefinite" />
              </circle>
              <circle r="7" fill="var(--brand-red)" stroke="#ffffff" stroke-width="2">
                <animateMotion path="M 140,110 C 250,160 380,200 460,240 S 600,200 680,180" dur="6s" repeatCount="indefinite" />
              </circle>
            </g>

            <!-- Teardrop Map Pin 1 -->
            <g class="map-pin pin-1" transform="translate(140, 110)">
              <circle cx="0" cy="-48" r="12" fill="var(--brand-red)" fill-opacity="0.2">
                <animate attributeName="r" from="12" to="55" dur="2.2s" repeatCount="indefinite" />
                <animate attributeName="fill-opacity" from="0.9" to="0" dur="2.2s" repeatCount="indefinite" />
              </circle>
              <path d="M 0,0 C -16,-16 -28,-32 -28,-48 C -28,-64 -12,-76 0,-76 C 12,-76 28,-64 28,-48 C 28,-32 16,-16 0,0 Z" fill="var(--brand-red)" />
              <circle cx="0" cy="-48" r="10" fill="#ffffff" />
            </g>
            <!-- Teardrop Map Pin 2 -->
            <g class="map-pin pin-2" transform="translate(460, 240)">
              <circle cx="0" cy="-48" r="12" fill="var(--brand-red)" fill-opacity="0.2">
                <animate attributeName="r" from="12" to="55" dur="2.2s" repeatCount="indefinite" />
                <animate attributeName="fill-opacity" from="0.9" to="0" dur="2.2s" repeatCount="indefinite" />
              </circle>
              <path d="M 0,0 C -16,-16 -28,-32 -28,-48 C -28,-64 -12,-76 0,-76 C 12,-76 28,-64 28,-48 C 28,-32 16,-16 0,0 Z" fill="var(--brand-red)" />
              <circle cx="0" cy="-48" r="10" fill="#ffffff" />
            </g>
            <!-- Teardrop Map Pin 3 -->
            <g class="map-pin pin-3" transform="translate(680, 180)">
              <circle cx="0" cy="-48" r="12" fill="var(--brand-red)" fill-opacity="0.2">
                <animate attributeName="r" from="12" to="55" dur="2.2s" repeatCount="indefinite" />
                <animate attributeName="fill-opacity" from="0.9" to="0" dur="2.2s" repeatCount="indefinite" />
              </circle>
              <path d="M 0,0 C -16,-16 -28,-32 -28,-48 C -28,-64 -12,-76 0,-76 C 12,-76 28,-64 28,-48 C 28,-32 16,-16 0,0 Z" fill="var(--brand-red)" />
              <circle cx="0" cy="-48" r="10" fill="#ffffff" />
            </g>
          </svg>
        </div>
      </div>
    </div>

    <!-- FAQs Accordions Grid -->
    <div class="row g-4 mb-5">
      <!-- Left Column (Items 1-4) -->
      <div class="col-lg-6 col-12">
        <div class="accordion faq-column" id="faqAccordionLeft">
          
          <!-- Item 1 -->
          <div class="faq-item-card mb-3">
            <div class="faq-item-header">
              <button class="faq-trigger-btn" type="button" data-bs-toggle="collapse" data-bs-target="#faq-l-1" aria-expanded="true" aria-controls="faq-l-1">
                <div class="faq-icon-badge">
                  <!-- Question circle Bootstrap Icon -->
                  <i class="bi bi-question-circle"></i>
                </div>
                <span class="faq-question-text">How do I get a quote for my move?</span>
                <div class="faq-chevron-icon">
                  <i class="bi bi-chevron-down"></i>
                </div>
              </button>
            </div>
            <div id="faq-l-1" class="collapse show" data-bs-parent="#faqAccordionLeft">
              <div class="faq-item-body">
                You can get a free, no-obligation quote by filling out our online enquiry form, calling us directly, or WhatsApp us your moving details. Our team will get back to you with a customized quote.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="faq-item-card mb-3">
            <div class="faq-item-header">
              <button class="faq-trigger-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-l-2" aria-expanded="false" aria-controls="faq-l-2">
                <div class="faq-icon-badge">
                  <!-- Box seam Bootstrap Icon -->
                  <i class="bi bi-box-seam"></i>
                </div>
                <span class="faq-question-text">Is my belongings insured during the move?</span>
                <div class="faq-chevron-icon">
                  <i class="bi bi-chevron-down"></i>
                </div>
              </button>
            </div>
            <div id="faq-l-2" class="collapse" data-bs-parent="#faqAccordionLeft">
              <div class="faq-item-body">
                Yes, we offer comprehensive transit insurance options to protect your goods. It covers any accidental damage during packing, loading, or transportation, ensuring complete peace of mind.
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="faq-item-card mb-3">
            <div class="faq-item-header">
              <button class="faq-trigger-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-l-3" aria-expanded="false" aria-controls="faq-l-3">
                <div class="faq-icon-badge">
                  <!-- Hand truck/trolley outline SVG (Not available in Bootstrap Icons) -->
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="8" cy="21" r="2" />
                    <line x1="5" y1="3" x2="8" y2="21" />
                    <line x1="8" y1="21" x2="18" y2="21" />
                    <line x1="7" y1="17" x2="17" y2="17" />
                    <line x1="6.5" y1="13" x2="16.5" y2="13" />
                    <rect x="9.5" y="9" width="8" height="8" rx="1" />
                    <path d="M3 3h4" />
                  </svg>
                </div>
                <span class="faq-question-text">Can you help with unpacking and set up?</span>
                <div class="faq-chevron-icon">
                  <i class="bi bi-chevron-down"></i>
                </div>
              </button>
            </div>
            <div id="faq-l-3" class="collapse" data-bs-parent="#faqAccordionLeft">
              <div class="faq-item-body">
                Yes, we provide end-to-end relocation services which include loading, unloading, unpacking, and arranging your furniture and large items in your new home.
              </div>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="faq-item-card mb-3">
            <div class="faq-item-header">
              <button class="faq-trigger-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-l-4" aria-expanded="false" aria-controls="faq-l-4">
                <div class="faq-icon-badge">
                  <!-- Calendar3 Bootstrap Icon -->
                  <i class="bi bi-calendar3"></i>
                </div>
                <span class="faq-question-text">How far in advance should I book my move?</span>
                <div class="faq-chevron-icon">
                  <i class="bi bi-chevron-down"></i>
                </div>
              </button>
            </div>
            <div id="faq-l-4" class="collapse" data-bs-parent="#faqAccordionLeft">
              <div class="faq-item-body">
                We recommend booking your move at least 7 to 10 days in advance. This allows us to plan the logistics, arrange premium packing materials, and schedule the appropriate carrier vehicle for your shifting date.
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Right Column (Items 5-8) -->
      <div class="col-lg-6 col-12">
        <div class="accordion faq-column" id="faqAccordionRight">
          
          <!-- Item 5 -->
          <div class="faq-item-card mb-3">
            <div class="faq-item-header">
              <button class="faq-trigger-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-r-1" aria-expanded="false" aria-controls="faq-r-1">
                <div class="faq-icon-badge">
                  <!-- Roll of Tape outline SVG (Not available in Bootstrap Icons) -->
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="7" />
                    <circle cx="11" cy="11" r="3.5" />
                    <path d="M11 4c3.87 0 7 3.13 7 7v7a2 2 0 0 1-2 2h-4" />
                    <path d="M18 11h3" />
                  </svg>
                </div>
                <span class="faq-question-text">Do you provide packing materials?</span>
                <div class="faq-chevron-icon">
                  <i class="bi bi-chevron-down"></i>
                </div>
              </button>
            </div>
            <div id="faq-r-1" class="collapse" data-bs-parent="#faqAccordionRight">
              <div class="faq-item-body">
                Yes, we supply high-quality packing materials including bubble wraps, corrugated boxes, foam sheets, stretch film, and heavy-duty tapes to ensure maximum safety for your household items.
              </div>
            </div>
          </div>

          <!-- Item 6 -->
          <div class="faq-item-card mb-3">
            <div class="faq-item-header">
              <button class="faq-trigger-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-r-2" aria-expanded="false" aria-controls="faq-r-2">
                <div class="faq-icon-badge">
                  <!-- Shield check Bootstrap Icon -->
                  <i class="bi bi-shield-check"></i>
                </div>
                <span class="faq-question-text">How do you ensure the safety of my items?</span>
                <div class="faq-chevron-icon">
                  <i class="bi bi-chevron-down"></i>
                </div>
              </button>
            </div>
            <div id="faq-r-2" class="collapse" data-bs-parent="#faqAccordionRight">
              <div class="faq-item-body">
                We ensure safety by using multi-layer high-quality packing, transporting goods in closed container vehicles, and employing highly trained, experienced packers and loaders.
              </div>
            </div>
          </div>

          <!-- Item 7 -->
          <div class="faq-item-card mb-3">
            <div class="faq-item-header">
              <button class="faq-trigger-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-r-3" aria-expanded="false" aria-controls="faq-r-3">
                <div class="faq-icon-badge">
                  <!-- Storage Warehouse outline SVG (Not available in Bootstrap Icons) -->
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 21h18" />
                    <path d="M3 10l9-6 9 6v11H3V10z" />
                    <rect x="8" y="12" width="8" height="9" />
                    <line x1="8" y1="15" x2="16" y2="15" />
                    <line x1="8" y1="18" x2="16" y2="18" />
                  </svg>
                </div>
                <span class="faq-question-text">Do you offer storage solutions?</span>
                <div class="faq-chevron-icon">
                  <i class="bi bi-chevron-down"></i>
                </div>
              </button>
            </div>
            <div id="faq-r-3" class="collapse" data-bs-parent="#faqAccordionRight">
              <div class="faq-item-body">
                Yes, we offer safe and secure short-term and long-term warehousing and storage solutions. Our warehouse facilities are fully guarded and CCTV-monitored 24/7.
              </div>
            </div>
          </div>

          <!-- Item 8 -->
          <div class="faq-item-card mb-3">
            <div class="faq-item-header">
              <button class="faq-trigger-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-r-4" aria-expanded="false" aria-controls="faq-r-4">
                <div class="faq-icon-badge">
                  <!-- Credit card Bootstrap Icon -->
                  <i class="bi bi-credit-card"></i>
                </div>
                <span class="faq-question-text">What payment methods do you accept?</span>
                <div class="faq-chevron-icon">
                  <i class="bi bi-chevron-down"></i>
                </div>
              </button>
            </div>
            <div id="faq-r-4" class="collapse" data-bs-parent="#faqAccordionRight">
              <div class="faq-item-body">
                We accept all convenient payment methods including bank transfers (NEFT/IMPS), UPI/GPay/PhonePe, Credit/Debit cards, and Cash.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- FAQs Contact Bar/Footer -->
    <div class="faqs-footer-bar mt-4">
      <div class="row align-items-center">
        <!-- Agent Info Column -->
        <div class="col-xl-4 col-lg-5 col-12 d-flex align-items-center mb-xl-0 mb-4 footer-agent-col">
          <div class="support-avatar-wrap">
            <svg viewBox="0 0 100 100" fill="none" class="support-avatar-svg">
              <!-- Background Circle -->
              <circle cx="50" cy="50" r="48" fill="rgba(198, 26, 26, 0.05)" stroke="rgba(198, 26, 26, 0.1)" stroke-width="2" />
              <!-- Face -->
              <circle cx="50" cy="40" r="16" fill="#fcdad7" stroke="#333333" stroke-width="2.5" />
              <!-- Hair -->
              <path d="M32 40 C32 20 68 20 68 40 C68 48 65 52 64 54 C61 50 58 48 50 48 C42 48 39 50 36 54 C35 52 32 48 32 40 Z" fill="#4a3b32" />
              <path d="M32 40 C32 24 68 24 68 40 C68 46 64 50 64 52" stroke="#333333" stroke-width="2.5" fill="none" />
              <!-- Neck -->
              <path d="M46 54 v8 h8 v-8" fill="#fcdad7" stroke="#333333" stroke-width="2.5" />
              <!-- Blazer -->
              <path d="M26 80 C26 68 35 60 46 60 h8 C65 60 74 68 74 80 Z" fill="#c61a1a" stroke="#333333" stroke-width="2.5" />
              <path d="M42 60 L50 72 L58 60" fill="none" stroke="#333333" stroke-width="2.5" />
              <polygon points="46,60 50,68 54,60" fill="#ffffff" />
              <!-- Headset -->
              <path d="M35 40 A15 15 0 0 1 65 40" fill="none" stroke="#333333" stroke-width="3" stroke-linecap="round" />
              <rect x="31" y="36" width="5" height="10" rx="2" fill="#333333" />
              <rect x="64" y="36" width="5" height="10" rx="2" fill="#333333" />
              <path d="M35 43 Q42 50 45 47" fill="none" stroke="#333333" stroke-width="2" stroke-linecap="round" />
              <circle cx="45" cy="47" r="2.5" fill="#333333" />
            </svg>
          </div>
          <div class="support-agent-text ms-3">
            <h4>Still have questions?</h4>
            <p class="mb-0">Our moving experts are here to help you at every step.</p>
          </div>
        </div>

        <!-- Contact Options Columns -->
        <div class="col-xl-8 col-lg-7 col-12">
          <div class="footer-contacts-wrap d-flex align-items-center justify-content-between flex-wrap gap-3">
            
            <!-- Call & WhatsApp Grouped in One Row -->
            <div class="call-wa-group d-flex align-items-center gap-3">
              <!-- Call Option -->
              <a href="<?= $phonehtml ?>" class="contact-option-item d-flex align-items-center text-decoration-none">
                <div class="contact-option-icon">
                  <!-- Telephone Fill Bootstrap Icon -->
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="contact-option-text ms-2">
                  <span class="label">Call Us</span>
                  <span class="value"><?= $phone ?></span>
                  <span class="sub">Mon - Sat | 9 AM - 7 PM</span>
                </div>
              </a>

              <!-- WhatsApp Option -->
              <a href="<?= $whatsapphtml ?>" target="_blank" class="contact-option-item d-flex align-items-center text-decoration-none">
                <div class="contact-option-icon">
                  <!-- WhatsApp Bootstrap Icon -->
                  <i class="bi bi-whatsapp"></i>
                </div>
                <div class="contact-option-text ms-2">
                  <span class="label">WhatsApp Us</span>
                  <span class="value"><?= $phone ?></span>
                  <span class="sub">Quick responses</span>
                </div>
              </a>
            </div>

            <!-- Email Option -->
            <a href="<?= $mailhtml ?>" class="contact-option-item d-flex align-items-center text-decoration-none">
              <div class="contact-option-icon">
                <!-- Envelope Fill Bootstrap Icon -->
                <i class="bi bi-envelope-fill"></i>
              </div>
              <div class="contact-option-text ms-2">
                <span class="label">Email Us</span>
                <span class="value text-lowercase"><?= $mail ?></span>
                <span class="sub">We reply within 24 hrs</span>
              </div>
            </a>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>
