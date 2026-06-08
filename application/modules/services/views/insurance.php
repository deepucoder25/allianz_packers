<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-services') ?>">Services</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Transit Insurance</span>
        </nav>
        <h1><span class="bc-title-white">Transit</span> <span class="bc-title-orange">Insurance</span></h1>
        <p class="bc-desc">Complete financial protection for your belongings. We secure your move with comprehensive insurance against accidents and transit risks.</p>
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
                <div class="pill-text"><strong>Expert Team</strong><small>Claim Advisers</small></div>
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
                    <h2 class="service-section-title">Complete Financial Safety &amp; Risk Protection</h2>
                    <p>
                        Even with the best packing materials and experienced drivers, unexpected road accidents, natural calamities, fire, or cargo delays can happen. At <strong><?= $company3 ?></strong>, we advise our clients to protect their belongings with comprehensive transit insurance.
                    </p>
                    <p>
                        We partner with leading national insurance companies to offer hassle-free transit insurance. This covers your household goods, office inventory, or vehicles from the moment they are loaded onto our trucks until they arrive safely at your new destination.
                    </p>

                    <h3 class="service-section-title mt-5">Why Get Transit Insurance?</h3>
                    <ul class="service-features-list">
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>All-Risk Coverage:</strong> Protects goods against theft, fire, collisions, accidents, and water damage.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Full Value Declaration:</strong> Declared goods are insured for their actual value for complete protection.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Quick Claim Settlement:</strong> Our dedicated coordinator team handles all claim filings and documents swiftly.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Complete Peace of Mind:</strong> Keeps you financially protected against any unexpected road hazards.</span></li>
                    </ul>

                    <h3 class="service-section-title mt-5">Our Insurance &amp; Claim Process</h3>
                    <div class="service-process-timeline">
                        <div class="service-process-step">
                            <h5>1. Declaration of Value</h5>
                            <p>You list your items and declare their value on our packing manifest before the shifting date.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>2. Premium Payment &amp; Policy Booking</h5>
                            <p>We issue the official insurance policy document upon receipt of the nominal premium payment.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>3. Safe Goods Transport</h5>
                            <p>Your items are transported with full coverage protection active during the entire transit journey.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>4. Quick Claims (If Needed)</h5>
                            <p>In case of any damage, our support team guides you through filling out claims and getting a swift settlement.</p>
                        </div>
                    </div>

                    <div class="p-4 bg-light border-start border-5 border-danger rounded-3 mt-5">
                        <h5 class="fw-bold text-danger mb-2">Important Coverage Notice</h5>
                        <p class="mb-0 text-muted small">
                            Insurance coverage is subject to physical verification and declarations made before dispatch. We advise documenting fragile items or high-value electronics in the manifest before packing.
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
