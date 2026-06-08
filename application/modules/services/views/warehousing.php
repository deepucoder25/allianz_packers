<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-services') ?>">Services</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Warehouse Services</span>
        </nav>
        <h1><span class="bc-title-white">Warehouse</span> <span class="bc-title-orange">Services</span></h1>
        <p class="bc-desc">Secure warehousing and short-term or long-term household storage. Our facilities are CCTV-monitored, fire-safe, clean, and pest-controlled.</p>
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
                <div class="pill-text"><strong>Expert Team</strong><small>24/7 Security Guards</small></div>
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
                    <h2 class="service-section-title">Secure Household Goods &amp; Commercial Storage</h2>
                    <p>
                        Whether you are moving abroad, facing a delay in your new house keys, or running out of office archive space, storing your valuable belongings securely is crucial. At <strong><?= $company3 ?></strong>, we provide clean, spacious, and highly secure warehousing and storage units across India.
                    </p>
                    <p>
                        Our storage centers are built to international safety standards. They feature 24/7 CCTV surveillance, fire prevention and detection systems, regular pest control cycles, and high-security perimeter gates. We offer flexible weekly, monthly, and yearly storage plans tailored to your budget.
                    </p>

                    <h3 class="service-section-title mt-5">Warehouse Safety Features</h3>
                    <ul class="service-features-list">
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>CCTV Surveillance:</strong> 24/7 continuous video recording and security guards on the premises.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Pest Control:</strong> Regular cycles of anti-termite and rodent control treatments.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Moisture Control:</strong> Well-ventilated, moisture-free storage rooms to prevent mold.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Detailed Inventory:</strong> We record and tag all items before storing them for easy retrieval.</span></li>
                    </ul>

                    <h3 class="service-section-title mt-5">Our Storage Process</h3>
                    <div class="service-process-timeline">
                        <div class="service-process-step">
                            <h5>1. Packing &amp; Inventory</h5>
                            <p>We pack your household goods securely in multi-layer boxes and create a detailed inventory manifest.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>2. Transport to Warehouse</h5>
                            <p>The items are loaded onto our container trucks and driven directly to our secure warehouse facility.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>3. Safe Storing &amp; Monitoring</h5>
                            <p>We store your items systematically in dedicated vaults or wooden pallets, keeping them protected and under 24/7 watch.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>4. Retrieval &amp; Delivery</h5>
                            <p>When you are ready, notify us, and we will deliver, unload, and set up your items at your new address.</p>
                        </div>
                    </div>

                    <div class="p-4 bg-light border-start border-5 border-danger rounded-3 mt-5">
                        <h5 class="fw-bold text-danger mb-2">Short &amp; Long Term Storage</h5>
                        <p class="mb-0 text-muted small">
                            We provide flexible options for all storage needs, whether for a few weeks or several years. All stored items are eligible for comprehensive fire and transit damage coverage.
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
