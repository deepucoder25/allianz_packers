<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-services') ?>">Services</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Door to Door Moving</span>
        </nav>
        <h1><span class="bc-title-white">Door to Door</span> <span class="bc-title-orange">Moving</span></h1>
        <p class="bc-desc">Full end-to-end relocation services. From packing at your old house to loading, transit, unloading, and unpacking at your new doorstep.</p>
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
                <div class="pill-text"><strong>Expert Team</strong><small>Dedicated Helpers</small></div>
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
                    <h2 class="service-section-title">Complete Doorstep-to-Doorstep Shifting Solutions</h2>
                    <p>
                        A true door-to-door relocation service means you don't have to lift a finger. At <strong><?= $company3 ?></strong>, we take care of the entire relocation process. From the moment we step into your home to pack your belongings, to the final unpacking and setup at your new destination, we handle everything.
                    </p>
                    <p>
                        Our team provides a unified package that includes packing materials, loading labor, transport carriers, toll fees, route maps, and unloading help. This comprehensive system is perfect for busy individuals and families moving to a new city who want a completely structured, stress-free relocation.
                    </p>

                    <h3 class="service-section-title mt-5">Features of Door-to-Door Shifting</h3>
                    <ul class="service-features-list">
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Unified Support Point:</strong> A dedicated relocation supervisor coordinates everything from packing to final delivery.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Custom Packaging:</strong> Multi-layered packing for fragile and heavy goods alike, protecting them from damage.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Safe Loading &amp; Unloading:</strong> Professional laborers handle items using advanced safety equipment.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Unpacking Assistance:</strong> Our team helps place heavy furniture and electronics in their designated rooms.</span></li>
                    </ul>

                    <h3 class="service-section-title mt-5">Our Door-to-Door Process</h3>
                    <div class="service-process-timeline">
                        <div class="service-process-step">
                            <h5>1. In-Home Consultation &amp; Plan</h5>
                            <p>We review your home inventory and lay out a custom plan detailing packing dates, truck size, and transit times.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>2. Professional Packing &amp; Loading</h5>
                            <p>Our team packs all items securely using premium wraps and boxes, then loads them safely into our transport trucks.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>3. Tracked Transportation</h5>
                            <p>We transport your items to the new city, keeping you updated on the truck's progress and expected arrival time.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>4. Delivery, Unpacking &amp; Disposal</h5>
                            <p>We unload and unpack the items at your new home, place furniture as requested, and clear away packing debris.</p>
                        </div>
                    </div>

                    <div class="p-4 bg-light border-start border-5 border-danger rounded-3 mt-5">
                        <h5 class="fw-bold text-danger mb-2">Doorstep Service Guarantee</h5>
                        <p class="mb-0 text-muted small">
                            With our door-to-door shifting model, we ensure complete care and safety for your goods, offering transit insurance to protect your belongings throughout the entire journey.
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
