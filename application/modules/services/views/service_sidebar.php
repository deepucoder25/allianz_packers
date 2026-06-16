<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Robust detection of active service slug from URL segment
$active_service = isset($active_service) ? $active_service : $this->uri->segment(1);

// Dynamic city fallback from merged component variables
$city = isset($city) ? $city : (isset($addressRegion) ? $addressRegion : 'India');
?>

<aside class="service-sidebar">
    <!-- Services Navigation Menu (Same-to-Same Screenshot Layout) -->
    <div class="sidebar-widget widget-services mb-4 p-0 overflow-hidden">
        <!-- Widget Header -->
        <div class="widget-services-header">
            <!-- Animated Background shapes -->
            <div class="header-animation-wrap">
                <div class="anim-orb orb-1"></div>
                <div class="anim-orb orb-2"></div>
                <div class="anim-star star-1"><i class="bi bi-star-fill"></i></div>
                <div class="anim-star star-2"><i class="bi bi-star-fill"></i></div>
                <div class="anim-star star-3"><i class="bi bi-star-fill"></i></div>
            </div>
            
            <div class="d-flex align-items-start gap-3 mb-2">
                <!-- Left Column: Icon Circle & Underline -->
                <div class="d-flex flex-column align-items-center">
                    <div class="header-icon-circle">
                        <i class="bi bi-grid-fill"></i>
                    </div>
                    <span class="accent-line-circle"></span>
                </div>
                <!-- Right Column: Title & Underline -->
                <div class="d-flex flex-column align-items-start pt-1">
                    <h3 class="widget-title">Our Services</h3>
                    <span class="accent-line-text"></span>
                </div>
            </div>
            <p class="widget-desc m-0">Expert relocation solutions in <?= $city ?>.</p>
        </div>
        
        <!-- Widget Body -->
        <div class="widget-services-body">
            <ul class="sidebar-services-list" id="sidebarServiceList">
                <?php
                $sidebar_services = [
                    ['slug' => 'home-relocation',        'name' => 'Home Shifting',          'icon' => 'bi-house-door-fill'],
                    ['slug' => 'office-shifting',        'name' => 'Office Relocation',      'icon' => 'bi-building-fill'],
                    ['slug' => 'car-transportation',     'name' => 'Car Transportation',     'icon' => 'bi-car-front-fill'],
                    ['slug' => 'transportation-service', 'name' => 'Transportation Service', 'icon' => 'bi-truck'],
                    ['slug' => 'warehouse-services',     'name' => 'Warehouse & Storage',     'icon' => 'bi-box-seam-fill'],
                    ['slug' => 'parcel-services',        'name' => 'Parcel Services',        'icon' => 'bi-gift-fill'],
                    ['slug' => 'insurance',              'name' => 'Transit Insurance',      'icon' => 'bi-shield-fill-check'],
                ];

                foreach ($sidebar_services as $s):
                    $is_active = ($active_service === $s['slug']) ? 'active' : '';
                ?>
                    <li>
                        <a href="<?= site_url($s['slug']) ?>" class="d-flex align-items-center justify-content-between <?= $is_active ?>">
                            <span class="d-flex align-items-center gap-3">
                                <span class="service-icon-wrap bg-light-tint">
                                    <i class="bi <?= $s['icon'] ?>"></i>
                                </span>
                                <span class="service-name"><?= $s['name'] ?></span>
                            </span>
                            <i class="bi bi-chevron-right arrow-icon"></i>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            
            <!-- View All Services Button -->
            <a href="<?= site_url('our-services') ?>" class="btn-view-all-services">
                <i class="bi bi-grid-3x3-gap-fill"></i> View All Services &rarr;
            </a>
        </div>
    </div>

    <!-- Contact & Action CTA Widget (Same-to-Same Design matching reference image) -->
    <div class="sidebar-widget widget-contact-cta mb-4 text-center">
        <!-- Headset Icon Circle -->
        <div class="cta-headset-circle">
            <i class="bi bi-headset"></i>
        </div>
        
        <!-- Titles -->
        <h3 class="cta-title">Need Help Moving<br>in <span class="cta-city-highlight"><?= $city ?></span>?</h3>
        <p class="cta-desc">Get a free consultation from our shifting experts. Available 24/7.</p>
        
        <!-- White Inner Card -->
        <div class="cta-contact-card">
            <!-- Row 1: Support Line -->
            <a href="<?= $phonehtml ?>" class="cta-contact-row">
                <div class="cta-contact-left">
                    <div class="cta-phone-icon-circle">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="cta-contact-text-wrap text-start">
                        <span class="cta-contact-label">Call Support <span class="cta-live-badge"><span class="live-pulse-dot"></span> LIVE</span></span>
                        <span class="cta-contact-value"><?= $phone ?></span>
                    </div>
                </div>
                <div class="cta-contact-right">
                    <i class="bi bi-chevron-right"></i>
                </div>
            </a>
            
            <div class="cta-card-divider"></div>
            
            <!-- Row 2: Alternate Line -->
            <a href="<?= $phonehtml1 ?>" class="cta-contact-row">
                <div class="cta-contact-left">
                    <div class="cta-phone-icon-circle">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="cta-contact-text-wrap text-start">
                        <span class="cta-contact-label">Alternate Line</span>
                        <span class="cta-contact-value"><?= $phone1 ?></span>
                    </div>
                </div>
                <div class="cta-contact-right">
                    <i class="bi bi-chevron-right"></i>
                </div>
            </a>
        </div>
        
        <!-- Bottom Buttons Row -->
        <div class="cta-action-buttons-row">
            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-action btn-cta-whatsapp">
                <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
            <button type="button" class="btn-cta-action btn-cta-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                <i class="bi bi-file-earmark-check"></i> Get Quote
            </button>
        </div>
    </div>

    <!-- Trusted Badge Widget (Timeline Design matching screenshot) -->
    <div class="sidebar-widget widget-trusted-badges">
        <div class="trusted-header d-flex align-items-start gap-2 mb-4">
            <i class="bi bi-patch-check-fill trusted-header-icon"></i>
            <div>
                <h4 class="trusted-title">Why Choose <?= $company3 ?>?</h4>
                <div class="trusted-header-line"></div>
            </div>
        </div>
        
        <ul class="trusted-timeline-list m-0 p-0">
            <!-- Point 1 -->
            <li class="trusted-timeline-item d-flex align-items-center gap-3 position-relative mb-4">
                <div class="timeline-dot dot-purple"></div>
                <div class="timeline-icon-box bg-purple-light text-purple">
                    <i class="bi bi-clock"></i>
                </div>
                <div class="timeline-content text-start">
                    <h5 class="timeline-item-title"><?= $yearsExperience ?> Years Experience</h5>
                    <p class="timeline-item-desc">Trusted since <?= $startYear ?></p>
                </div>
            </li>
            
            <!-- Point 2 -->
            <li class="trusted-timeline-item d-flex align-items-center gap-3 position-relative mb-4">
                <div class="timeline-dot dot-green"></div>
                <div class="timeline-icon-box bg-green-light text-green">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="timeline-content text-start">
                    <h5 class="timeline-item-title"><?= $happyClients ?> Happy Clients</h5>
                    <p class="timeline-item-desc">Families and businesses trust us</p>
                </div>
            </li>
            
            <!-- Point 3 -->
            <li class="trusted-timeline-item d-flex align-items-center gap-3 position-relative mb-4">
                <div class="timeline-dot dot-orange"></div>
                <div class="timeline-icon-box bg-orange-light text-orange">
                    <i class="bi bi-patch-check-fill"></i>
                </div>
                <div class="timeline-content text-start">
                    <h5 class="timeline-item-title">Verified &amp; Licensed</h5>
                    <p class="timeline-item-desc">ISO certified packers and movers</p>
                </div>
            </li>
            
            <!-- Point 4 -->
            <li class="trusted-timeline-item d-flex align-items-center gap-3 position-relative mb-4">
                <div class="timeline-dot dot-red"></div>
                <div class="timeline-icon-box bg-red-light text-red">
                    <i class="bi bi-shield-fill-check"></i>
                </div>
                <div class="timeline-content text-start">
                    <h5 class="timeline-item-title"><?= $secureShifting ?> Secure Shifting</h5>
                    <p class="timeline-item-desc">Complete transit insurance options</p>
                </div>
            </li>
            
            <!-- Point 5 -->
            <li class="trusted-timeline-item d-flex align-items-center gap-3 position-relative">
                <div class="timeline-dot dot-gold"></div>
                <div class="timeline-icon-box bg-gold-light text-gold">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="timeline-content text-start">
                    <h5 class="timeline-item-title">Pan-India Coverage</h5>
                    <p class="timeline-item-desc">100+ branches across 20+ states</p>
                </div>
            </li>
        </ul>
    </div>
</aside>
