<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-services') ?>">Services</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Car Transportation</span>
        </nav>
        <h1><span class="bc-title-white">Car</span> <span class="bc-title-orange">Transportation</span></h1>
        <p class="bc-desc">Premium vehicle shifting and car carrier services. We transport your car safely and scratch-free inside enclosed carriers across India.</p>
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
                <div class="pill-text"><strong>Expert Team</strong><small>Specialist Drivers</small></div>
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
                    <h2 class="service-section-title">Scratch-Free Car Carrier &amp; Relocation</h2>
                    <p>
                        Your car is not just a valuable asset; it is a vital part of your daily life. Shipping it across the country requires absolute security and specialized loading mechanisms. At <strong><?= $company3 ?></strong>, we provide door-to-door vehicle transportation using specialized open and closed car carriers.
                    </p>
                    <p>
                        Before loading your vehicle, our specialists conduct a thorough pre-move condition assessment, listing any pre-existing marks or fuel levels. The vehicle is then driven onto our hydraulic loading ramp and secured to the chassis using heavy-duty wheel straps and locking systems. This prevents any vertical or horizontal movement during transport.
                    </p>

                    <h3 class="service-section-title mt-5">Key Vehicle Shifting Highlights</h3>
                    <ul class="service-features-list">
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Enclosed Carriers:</strong> Covered car carriers protect the vehicle from road dust, gravel, and adverse weather.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Hydraulic Ramp Loading:</strong> Ensures smooth entry and exit of low-clearance vehicles.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Wheel Locking Straps:</strong> Securely locks tires to the container deck to eliminate movement.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Doorstep Delivery:</strong> We pick up and drop off the vehicle right at your location.</span></li>
                    </ul>

                    <h3 class="service-section-title mt-5">How We Move Your Car</h3>
                    <div class="service-process-timeline">
                        <div class="service-process-step">
                            <h5>1. Document Check &amp; Condition Report</h5>
                            <p>We check vehicle papers (RC, Insurance) and create a detailed condition report before receiving the keys.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>2. Secure Loading at Terminal</h5>
                            <p>Our expert vehicle handlers load your car onto the carrier deck, clamping wheels firmly to ensure absolute stability.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>3. Enclosed Cargo Transit</h5>
                            <p>The carrier travels along pre-approved highway routes, supervised by professional long-distance drivers.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>4. Safe Delivery &amp; Inspection</h5>
                            <p>We deliver the car directly to your new address, unloading it carefully for your complete verification and handover.</p>
                        </div>
                    </div>

                    <div class="p-4 bg-light border-start border-5 border-danger rounded-3 mt-5">
                        <h5 class="fw-bold text-danger mb-2">Transit Insurance &amp; Security</h5>
                        <p class="mb-0 text-muted small">
                            All vehicle shipments are eligible for comprehensive transit insurance. We advise maintaining minimum fuel levels and removing personal belongings before the pickup date.
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
