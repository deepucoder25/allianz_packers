<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-services') ?>">Services</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Transportation Service</span>
        </nav>
        <h1><span class="bc-title-white">Transportation</span> <span class="bc-title-orange">Service</span></h1>
        <p class="bc-desc">Reliable goods transport and carrier logistics. We operate a vast fleet of container trucks, ensuring safe, on-time delivery across major cities.</p>
        <div class="bc-features">
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-clock-history"></i></div>
                <div class="pill-text"><strong>Since <?= $startYear ?></strong><small><?= $experience ?> Years Legacy</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-patch-check-fill"></i></div>
                <div class="pill-text"><strong>ISO Certified</strong><small>Licensed &amp; Verified</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-people-fill"></i></div>
                <div class="pill-text"><strong>Expert Team</strong><small>Professional Drivers</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <div class="pill-text"><strong>Pan-India</strong><small>100+ Branches</small></div>
            </div>
        </div>
    </div>
    <div class="bc-wave-wrap">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 64" preserveAspectRatio="none">
            <path d="M0,30 C480,64 960,0 1440,30 L1440,64 L0,64 Z" fill="#f8fafc"/>
        </svg>
    </div>
</section>

<!-- Main Page Content Section -->
<section class="service-details-section">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Heavy Commercial Goods &amp; Domestic Freight</h2>
                    <p>
                        High-quality transport logistics is key to a smooth relocation or supply chain cycle. At <strong><?= $company3 ?></strong>, we run an extensive network of cargo carriers, container vehicles, and trailers designed to deliver commercial and domestic goods safely.
                    </p>
                    <p>
                        Our transport services cater to personal household relocations as well as bulk commercial B2B cargo shipments. Our fleet consists of fully enclosed, weather-proof container vehicles ranging from small cargo vans to heavy multi-axle freight trucks, satisfying all volume requirements.
                    </p>

                    <h3 class="service-section-title mt-5">Carrier Fleet Highlights</h3>
                    <ul class="service-features-list">
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Enclosed Containers:</strong> Double-sealed container trucks protect cargo from rain, moisture, and road hazards.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Experienced Drivers:</strong> Highly trained long-haul truck drivers with verified licenses and clean records.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Scheduled Deliveries:</strong> Mapped routing schedules ensure punctuality and avoid local congestion.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Full Load &amp; Part Load:</strong> Flexible booking options to accommodate entire trucks or shared container spaces.</span></li>
                    </ul>

                    <h3 class="service-section-title mt-5">Our Transport Workflow</h3>
                    <div class="service-process-timeline">
                        <div class="service-process-step">
                            <h5>1. Cargo Verification &amp; Load Planning</h5>
                            <p>We weigh, inspect, and organize cargo packages, choosing the best container size to prevent internal shifts.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>2. Professional Loading &amp; Stacking</h5>
                            <p>Our handlers arrange crates and boxes inside the truck container, putting heavier loads at the bottom and using lashes for security.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>3. Secure Highway Transit</h5>
                            <p>Vehicles travel along primary highways under regular communication with regional logistics dispatch offices.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>4. Destination Handover</h5>
                            <p>Goods are unloaded at the destination site, verified against the original packing manifest, and successfully handed over.</p>
                        </div>
                    </div>

                    <div class="p-4 bg-light border-start border-5 border-danger rounded-3 mt-5">
                        <h5 class="fw-bold text-danger mb-2">Transit Insurance Advantage</h5>
                        <p class="mb-0 text-muted small">
                            We offer complete goods transit insurance options to provide comprehensive financial protection for cargo against traffic risks and natural elements during travel.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar'); ?>
            </div>
        </div>
    </div>
</section>
