<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-services') ?>">Services</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Home Relocation</span>
        </nav>
        <h1><span class="bc-title-white">Home</span> <span class="bc-title-orange">Relocation</span></h1>
        <p class="bc-desc">Experience a hassle-free, secure, and fully guided household shifting service. We pack, load, transport, and unpack your home with utmost care.</p>
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
                <div class="pill-text"><strong>Expert Team</strong><small>Staffed Staff</small></div>
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
                    <h2 class="service-section-title">Reliable Household Shifting Services</h2>
                    <p>
                        Relocating your home means moving your life, your memories, and your most treasured possessions. At <strong><?= $company3 ?></strong>, we treat your household items with the same care and respect that you do. Our customized home relocation services are designed to manage every aspect of your move smoothly, ensuring zero stress and complete peace of mind.
                    </p>
                    <p>
                        Our team of trained packing and loading professionals utilizes premium-grade packing materials, including bubble wraps, heavy-duty corrugated cartons, foam sheets, and edge protectors. Whether it is delicate glassware, electronic appliances, bulky furniture, or fragile artwork, we employ specialized packing techniques for each category of item.
                    </p>

                    <h3 class="service-section-title mt-5">Why Choose Us for Household Shifting?</h3>
                    <ul class="service-features-list">
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Multi-Layer Packing:</strong> High quality materials to shield items from scratches, dents, and moisture.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Disassembly &amp; Assembly:</strong> Expert handling of complex furniture items like beds, wardrobes, and TV mounts.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Structured Loading:</strong> Safe arrangement inside clean, water-proof container vehicles.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Unpacking Assistance:</strong> Setting up heavy goods at your new home as per instructions.</span></li>
                    </ul>

                    <h3 class="service-section-title mt-5">Our Household Shifting Process</h3>
                    <div class="service-process-timeline">
                        <div class="service-process-step">
                            <h5>1. Pre-Move Survey &amp; Quote</h5>
                            <p>We perform an in-person or virtual survey of your items to provide a transparent, itemized estimation with no hidden charges.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>2. Premium Multi-Layer Packing</h5>
                            <p>On the scheduled date, our professional packers arrive with top-grade materials to pack everything systematically.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>3. Safe Loading &amp; Dispatch</h5>
                            <p>Packed cartons and heavy furniture are loaded securely into our enclosed transport trucks by experienced handlers.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>4. Secure Delivery &amp; Setup</h5>
                            <p>We deliver the items at your doorstep, unload, unpack, and help arrange heavy furniture items to get you settled.</p>
                        </div>
                    </div>

                    <div class="p-4 bg-light border-start border-5 border-danger rounded-3 mt-5">
                        <h5 class="fw-bold text-danger mb-2">Safe Transit Guarantee</h5>
                        <p class="mb-0 text-muted small">
                            We provide comprehensive transit insurance options and real-time support coordinator contacts to keep you updated on the location of your household cargo throughout the journey.
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
