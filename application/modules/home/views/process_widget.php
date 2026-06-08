<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

$process_steps = [
    [
        'step' => '01',
        'title' => 'ENQUIRE &<br>GET A QUOTE',
        'desc' => 'Share your moving details with us and get a free, no-obligation quote.',
        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 12a9 9 0 0 1 18 0" />
                  <rect x="2" y="11" width="3" height="5" rx="1.5" />
                  <rect x="19" y="11" width="3" height="5" rx="1.5" />
                  <path d="M19 14c0 3-3 4-5 4" />
                  <circle cx="13" cy="18" r="1.5" fill="currentColor" />
                </svg>'
    ],
    [
        'step' => '02',
        'title' => 'SURVEY &<br>PLANNING',
        'desc' => 'We assess your needs and create a customized moving plan for you.',
        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                  <rect x="9" y="2" width="6" height="3" rx="1" fill="#ffffff" />
                  <path d="M7 9l1.5 1.5L12 7.5M7 14l1.5 1.5L12 12.5" />
                  <g transform="translate(12, 13) scale(0.9)">
                    <polygon points="5,1 10,3.5 5,6 0,3.5" fill="#ffffff" stroke="currentColor" stroke-width="1.5" />
                    <polygon points="0,3.5 5,6 5,11 0,8.5" fill="#ffffff" stroke="currentColor" stroke-width="1.5" />
                    <polygon points="10,3.5 10,8.5 5,11 5,6" fill="#ffffff" stroke="currentColor" stroke-width="1.5" />
                  </g>
                </svg>'
    ],
    [
        'step' => '03',
        'title' => 'PACKING &<br>PREPARATION',
        'desc' => 'Our team uses premium packing materials to pack your belongings securely.',
        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2L3 7v10l9 5 9-5V7l-9-5z" />
                  <line x1="12" y1="22" x2="12" y2="12" />
                  <line x1="12" y1="12" x2="3" y2="7" />
                  <line x1="12" y1="12" x2="21" y2="7" />
                  <path d="M12 7l4.5-2.5M12 7L7.5 4.5" stroke-width="1" />
                </svg>'
    ],
    [
        'step' => '04',
        'title' => 'SAFE<br>TRANSPORTATION',
        'desc' => 'Your belongings are transported safely using our well-maintained fleet.',
        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="2" y="4" width="13" height="11" rx="1" />
                  <path d="M15 7h4.5l3.5 3.5V15h-8V7z" />
                  <circle cx="6.5" cy="18" r="2" />
                  <circle cx="16.5" cy="18" r="2" />
                  <rect x="16" y="8.5" width="3.5" height="2.5" rx="0.5" />
                </svg>'
    ],
    [
        'step' => '05',
        'title' => 'DELIVERY &<br>UNLOADING',
        'desc' => 'We deliver your items on time and unload them with care.',
        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <g transform="translate(8, 4)">
                    <rect x="0" y="0" width="8" height="8" rx="1.5" />
                    <line x1="0" y1="4" x2="8" y2="4" stroke-width="1" />
                    <line x1="4" y1="0" x2="4" y2="8" stroke-width="1" />
                  </g>
                  <path d="M3 15c1-3 3-5 5-4s2.5 2 2.5 3c0 2-2.5 3-4 3s-3.5-2-3.5-2z" />
                  <path d="M21 15c-1-3-3-5-5-4s-2.5 2-2.5 3c0 2 2.5 3 4 3s3.5-2 3.5-2z" />
                </svg>'
    ],
    [
        'step' => '06',
        'title' => 'SETTLE IN &<br>HAPPY MOVE',
        'desc' => 'We ensure everything is in place so you can settle in and feel at home.',
        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                  <g transform="translate(8, 9)">
                    <rect x="0" y="0" width="8" height="8" rx="4" fill="#ffffff" stroke="currentColor" stroke-width="1.5" />
                    <path d="M2.5 4l1.5 1.5 2-2.5" stroke-width="1.5" />
                  </g>
                </svg>'
    ]
];
?>

<section class="process-home-section py-5">
  <div class="container">
    <!-- Section Header (with truck graphic on left and map on right) -->
    <div class="row align-items-center mb-5 header-row">
      <!-- Left side: Moving truck -->
      <div class="col-lg-3 d-none d-lg-block text-left">
        <div class="header-truck-wrap">
          <img src="<?= base_url('assets/images/home_modules/moving_truck.jpg') ?>" class="header-truck-img" alt="<?= $company3?> Moving Truck" loading="lazy">
        </div>
      </div>
      
      <!-- Center: Title and desc -->
      <div class="col-lg-6 col-md-12 text-center">
        <div class="services-home-header mb-0">
          <div class="services-home-accent text-uppercase mb-2">
            <span class="dot-accent">—</span> OUR PROCESS <span class="dot-accent">—</span>
          </div>
          <h2 class="services-home-title">Moves Made Simple,<br><span>From Start to Finish</span></h2>
          <div class="services-home-divider mb-3"></div>
          <p class="services-home-desc">
            A smooth, transparent and hassle-free process designed around you.
          </p>
        </div>
      </div>
      
      <!-- Right side: World map -->
      <div class="col-lg-3 d-none d-lg-block text-right">
        <div class="header-map-wrap">
          <svg viewBox="0 0 900 400" fill="none" class="header-world-map">
            <defs>
              <pattern id="header-dot-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <circle cx="10" cy="10" r="3.8" fill="#888888" />
              </pattern>
            </defs>
            <!-- North America -->
            <path d="M 80,70 C 80,60 120,40 160,50 C 200,60 210,30 220,50 C 230,70 260,90 280,100 C 290,110 320,110 320,120 C 310,130 290,140 280,150 C 270,160 280,180 270,190 C 260,200 240,210 220,190 C 200,170 190,170 170,180 C 150,190 140,210 130,220 C 120,230 110,210 100,190 C 90,170 80,150 90,120 C 100,90 80,80 80,70 Z" fill="url(#header-dot-pattern)" />
            <!-- Greenland -->
            <path d="M 280,30 C 300,20 320,30 330,50 C 320,70 290,80 280,70 C 270,60 270,40 280,30 Z" fill="url(#header-dot-pattern)" />
            <!-- South America -->
            <path d="M 220,200 C 250,210 260,230 270,250 C 280,270 270,300 250,340 C 230,380 210,400 200,410 C 190,410 180,380 180,340 C 180,300 190,260 220,200 Z" fill="url(#header-dot-pattern)" />
            <!-- Africa -->
            <path d="M 420,180 C 460,160 510,160 540,200 C 560,220 560,250 540,290 C 520,330 490,370 470,390 C 455,400 445,380 440,360 C 435,340 415,310 405,290 C 395,270 390,240 405,210 C 420,180 410,190 420,180 Z" fill="url(#header-dot-pattern)" />
            <!-- Europe -->
            <path d="M 400,100 C 420,70 450,70 470,90 C 480,110 460,130 440,140 C 420,150 410,140 400,120 C 390,110 395,100 400,100 Z" fill="url(#header-dot-pattern)" />
            <!-- Asia -->
            <path d="M 470,90 C 510,70 560,60 620,60 C 680,60 780,50 820,80 C 850,110 870,160 850,210 C 830,260 800,280 750,270 C 700,260 660,240 620,250 C 580,260 550,230 520,240 C 490,250 470,220 490,180 C 510,140 480,120 470,90 Z" fill="url(#header-dot-pattern)" />
            <!-- Australia -->
            <path d="M 750,300 C 780,290 820,310 830,340 C 830,370 790,390 750,380 C 720,370 710,330 750,300 Z" fill="url(#header-dot-pattern)" />
            
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

    <!-- Steps Grid Row -->
    <div class="row g-4 justify-content-center mb-5 card-row position-relative">
      
      <?php foreach ($process_steps as $index => $step): ?>
      <div class="col-lg-2 col-md-4 col-sm-6 col-6 position-relative d-flex align-items-stretch">
        <!-- Local Column SVG Connector -->
        <?php if ($index < 5): ?>
        <div class="process-column-connector">
          <svg viewBox="0 0 200 100" fill="none" preserveAspectRatio="none">
            <?php if ($index == 0): ?>
            <!-- Card 1 Connector: starts at left card edge (-100), goes under bubble 1, arches to bubble 2 -->
            <path class="process-connector-extension-left" d="M -100 36 L -24 36" 
                  stroke="var(--brand-red)" stroke-width="2" stroke-dasharray="6 5" fill="none">
              <animate attributeName="stroke-dashoffset" from="11" to="0" dur="1.2s" repeatCount="indefinite" />
            </path>
            <path d="M -24 36 A 24 24 0 0 0 24 36 Q 100 -4 176 36 A 24 24 0 0 0 200 60" 
                  stroke="var(--brand-red)" stroke-width="2" stroke-dasharray="6 5" fill="none">
              <animate attributeName="stroke-dashoffset" from="11" to="0" dur="1.2s" repeatCount="indefinite" />
            </path>
            <?php else: ?>
            <!-- Card 2, 3, 4, 5 Connector: starts under bubble i, arches to bubble i+1 -->
            <path d="M 0 60 A 24 24 0 0 0 24 36 Q 100 -4 176 36 A 24 24 0 0 0 200 60" 
                  stroke="var(--brand-red)" stroke-width="2" stroke-dasharray="6 5" fill="none">
              <animate attributeName="stroke-dashoffset" from="11" to="0" dur="1.2s" repeatCount="indefinite" />
            </path>
            <?php endif; ?>
          </svg>
          <div class="process-chevron-circle"></div>
        </div>
        <?php endif; ?>

        <?php if ($index == 5): ?>
        <!-- Card 6 right end line: goes from bubble 6 to right card edge -->
        <div class="process-column-connector-end">
          <svg viewBox="0 0 100 100" fill="none" preserveAspectRatio="none">
            <path d="M 0 60 A 24 24 0 0 0 24 36" 
                  stroke="var(--brand-red)" stroke-width="2" stroke-dasharray="6 5" fill="none">
              <animate attributeName="stroke-dashoffset" from="11" to="0" dur="1.2s" repeatCount="indefinite" />
            </path>
            <path class="process-connector-extension-right" d="M 24 36 L 100 36" 
                  stroke="var(--brand-red)" stroke-width="2" stroke-dasharray="6 5" fill="none">
              <animate attributeName="stroke-dashoffset" from="11" to="0" dur="1.2s" repeatCount="indefinite" />
            </path>
          </svg>
        </div>
        <?php endif; ?>

        <div class="process-card">
          <!-- Step Number Bubble -->
          <div class="process-card-number"><?= $step['step'] ?></div>
          
          <!-- Card Body Content -->
          <div class="process-card-body">
            <div class="process-card-icon-circle">
              <?= $step['icon'] ?>
            </div>
            <h3 class="process-card-title"><?= $step['title'] ?></h3>
            <div class="process-card-divider-line"></div>
            <p class="process-card-desc"><?= $step['desc'] ?></p>
          </div>

        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Trust Badges Bar (same to same like screenshot) -->
    <div class="process-trust-bar">
      <div class="process-trust-container">
        <!-- Badge 1: Transparent Pricing -->
        <div class="process-trust-item">
          <div class="process-trust-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              <path d="M9 11l2 2 4-4"/>
            </svg>
          </div>
          <div class="process-trust-text">
            <h4>Transparent Pricing</h4>
            <p>No hidden charges, no surprises.</p>
          </div>
        </div>

        <!-- Badge 2: Experienced Team -->
        <div class="process-trust-item">
          <div class="process-trust-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </div>
          <div class="process-trust-text">
            <h4>Experienced Team</h4>
            <p>Skilled professionals you can trust.</p>
          </div>
        </div>

        <!-- Badge 3: On-Time Delivery -->
        <div class="process-trust-item">
          <div class="process-trust-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/>
              <polyline points="12 6 12 12 16 14"/>
            </svg>
          </div>
          <div class="process-trust-text">
            <h4>On-Time Delivery</h4>
            <p>We value your time and deliver on time.</p>
          </div>
        </div>

        <!-- Badge 4: Safe & Secure -->
        <div class="process-trust-item">
          <div class="process-trust-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"/>
              <polygon points="12 22.08 12 12 3 6.92 3 17.08 12 22.08"/>
              <polygon points="12 22.08 21 17.08 21 6.92 12 12 12 22.08"/>
              <polygon points="12 12 21 6.92 12 1.84 3 6.92 12 12"/>
            </svg>
          </div>
          <div class="process-trust-text">
            <h4>Safe & Secure</h4>
            <p>Your belongings are always in safe hands.</p>
          </div>
        </div>

        <!-- Badge 5: 100% Satisfaction -->
        <div class="process-trust-item">
          <div class="process-trust-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="8" r="7"/>
              <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/>
            </svg>
          </div>
          <div class="process-trust-text">
            <h4>100% Satisfaction</h4>
            <p>Your satisfaction is our top priority.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
