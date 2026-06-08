<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

$services_list = [
    [
        'title_1' => 'Home',
        'title_2' => 'Relocation',
        'desc' => 'Safe and secure moving of your home with complete care and professional handling.',
        'slug' => 'home-relocation',
        'image' => 'home_relocation.jpg',
        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                  <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>'
    ],
    [
        'title_1' => 'Office',
        'title_2' => 'Shifting',
        'desc' => 'Hassle-free office relocation with minimal downtime and maximum efficiency.',
        'slug' => 'office-shifting',
        'image' => 'office_shifting.jpg',
        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 18h16" />
                  <path d="M6 18V10a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8" />
                  <path d="M9 12h6" />
                  <path d="M12 8v4" />
                  <path d="M12 18v3" />
                  <path d="M10 21h4" />
                </svg>'
    ],
    [
        'title_1' => 'Car',
        'title_2' => 'Transportation',
        'desc' => 'Safe and timely car transportation across India with door-to-door delivery.',
        'slug' => 'car-transportation',
        'image' => 'car_loading.jpg',
        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="1" y="3" width="15" height="13" rx="2" />
                  <polygon points="16 8 20 8 23 11 23 16 16 16 16 8" />
                  <circle cx="5.5" cy="18.5" r="2.5" />
                  <circle cx="18.5" cy="18.5" r="2.5" />
                  <path d="M4 8V6a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2" />
                </svg>'
    ],
    [
        'title_1' => 'Parcel',
        'title_2' => 'Services',
        'desc' => 'High-quality packing materials and expert handling for maximum protection.',
        'slug' => 'parcel-services',
        'image' => 'parcel_services.jpg',
        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="16.5" y1="9.4" x2="7.5" y2="4.21" />
                  <polygon points="12 22.08 12 12 3 6.92 3 17.08 12 22.08" />
                  <polygon points="12 22.08 21 17.08 21 6.92 12 12 12 22.08" />
                  <polygon points="12 12 21 6.92 12 1.84 3 6.92 12 12" />
                </svg>'
    ],
    [
        'title_1' => 'Door to Door',
        'title_2' => 'Moving',
        'desc' => 'Quick and reliable local moving services in your city, whenever you need us.',
        'slug' => 'door-to-door-moving',
        'image' => 'local_shifting.jpg',
        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>'
    ],
    [
        'title_1' => 'Warehouse',
        'title_2' => 'Services',
        'desc' => 'Safe and secure storage solutions for short or long term with 24/7 monitoring.',
        'slug' => 'warehouse-services',
        'image' => 'warehousing.jpg',
        'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 21h18" />
                  <path d="M5 21V8l7-4 7 4v13" />
                  <path d="M9 21v-6h6v6" />
                </svg>'
    ]
];
?>

<section class="services-home-section py-4">
  <!-- SVG clip-path container (hidden) -->
  <svg class="services-svg-clip-container">
    <defs>
      <clipPath id="service-clip" clipPathUnits="objectBoundingBox">
        <path d="M 0.15,0 L 1,0 L 1,1 L 0.25,1 C 0.05,0.7 0.02,0.35 0.15,0 Z" />
      </clipPath>
    </defs>
  </svg>

  <div class="container">
    <div class="services-home-header">
      <div class="services-home-accent text-uppercase">
        <span class="dot-accent">•••</span> WHAT WE OFFER <span class="dot-accent">•••</span>
      </div>
      <h2 class="services-home-title">Our <span>Services</span></h2>
      <p class="services-home-desc">
        From local moves to international relocations, we provide end-to-end moving solutions that are safe, reliable, and stress-free.
      </p>
      <div class="services-home-divider"></div>
    </div>

    <div class="row g-4">
      <?php foreach ($services_list as $service): ?>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="services-home-card">
          <div class="services-home-card-left">
            <div class="services-home-card-header">
              <div class="services-home-icon-circle">
                <?= $service['icon'] ?>
              </div>
              <h3 class="services-home-card-title"><?= $service['title_1'] ?><br><?= $service['title_2'] ?></h3>
            </div>
            <div class="services-home-deco-line"></div>
            <p class="services-home-desc-text"><?= $service['desc'] ?></p>
            <a href="<?= site_url($service['slug']) ?>" class="services-home-know-more">
              Know More
              <span class="arrow-wrap">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </span>
            </a>
          </div>
          <div class="services-home-card-curve"></div>
          <div class="services-home-card-right">
            <img src="<?= base_url('assets/images/services_modules/' . $service['image']) ?>" alt="<?= $company3?> <?= $service['title_1'] . ' ' . $service['title_2'] ?>" loading="lazy">
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Trust Badges Bar (same to same like screenshot) -->
    <div class="services-trust-bar">
      <div class="trust-bar-container">
        <!-- Badge 1: 100% Safe & Secure -->
        <div class="trust-bar-item">
          <div class="trust-bar-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              <path d="M9 11l2 2 4-4"/>
            </svg>
          </div>
          <div class="trust-bar-text">
            <h4>100% Safe & Secure</h4>
            <p>Your belongings are in safe hands.</p>
          </div>
        </div>

        <!-- Badge 2: Experienced Team -->
        <div class="trust-bar-item">
          <div class="trust-bar-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </div>
          <div class="trust-bar-text">
            <h4>Experienced Team</h4>
            <p>Skilled professionals who care for your move.</p>
          </div>
        </div>

        <!-- Badge 3: On-Time Delivery -->
        <div class="trust-bar-item">
          <div class="trust-bar-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/>
              <polyline points="12 6 12 12 16 14"/>
            </svg>
          </div>
          <div class="trust-bar-text">
            <h4>On-Time Delivery</h4>
            <p>We value your time and deliver on time.</p>
          </div>
        </div>

        <!-- Badge 4: Quality Packing -->
        <div class="trust-bar-item">
          <div class="trust-bar-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
              <line x1="12" y1="22.08" x2="12" y2="12"/>
            </svg>
          </div>
          <div class="trust-bar-text">
            <h4>Quality Packing</h4>
            <p>High quality packing materials used.</p>
          </div>
        </div>

        <!-- Badge 5: Affordable Prices -->
        <div class="trust-bar-item">
          <div class="trust-bar-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/>
              <path d="M9 15l6-6"/>
              <line x1="9" y1="9" x2="9.01" y2="9"/>
              <line x1="15" y1="15" x2="15.01" y2="15"/>
            </svg>
          </div>
          <div class="trust-bar-text">
            <h4>Affordable Prices</h4>
            <p>Best relocation solutions at competitive prices.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
