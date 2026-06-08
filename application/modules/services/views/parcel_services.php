<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-services') ?>">Services</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Parcel Services</span>
        </nav>
        <h1><span class="bc-title-white">Parcel</span> <span class="bc-title-orange">Services</span></h1>
        <p class="bc-desc">Reliable, affordable part-load and single parcel shipping. We deliver boxes, luggage, and single items safely across major Indian cities.</p>
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
                <div class="pill-text"><strong>Expert Team</strong><small>Swift Handlers</small></div>
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
                    <h2 class="service-section-title">Part Load (LTL) &amp; Small Consignment Courier Shifting</h2>
                    <p>
                        You don't always need to book a whole truck to move your belongings. If you only need to ship a few boxes, luggage, a single piece of furniture, or a refrigerator, our parcel services are the perfect solution. At <strong><?= $company3 ?></strong>, we offer cheap part-load cargo delivery across India.
                    </p>
                    <p>
                        By combining multiple small consignments into one large container truck, we keep shipping costs low for everyone. We tag and label each parcel carefully, ensuring your goods are delivered safely and on time to the correct address.
                    </p>

                    <h3 class="service-section-title mt-5">Benefits of Our Parcel Services</h3>
                    <ul class="service-features-list">
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Affordable Pricing:</strong> Pay only for the space your items occupy, not the whole truck.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Quality Packing:</strong> We pack individual parcel items in bubble wraps and sturdy boxes for maximum safety.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Luggage Shipping:</strong> Perfect for students, executives, and travelers moving with limited baggage.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Wide Coverage:</strong> Daily parcel transport runs to all major cities across India.</span></li>
                    </ul>

                    <h3 class="service-section-title mt-5">Our Parcel Shipping Process</h3>
                    <div class="service-process-timeline">
                        <div class="service-process-step">
                            <h5>1. Pickup or Drop-off</h5>
                            <p>We pick up the parcel from your doorstep or you can drop it off at your local branch office.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>2. Secure Packing &amp; Labeling</h5>
                            <p>We pack the items in protective wrap and label them with a unique tracking number to ensure accuracy.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>3. Shared Container Transit</h5>
                            <p>Your parcel travels in a shared container vehicle along with other shipments, keeping costs low.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>4. Doorstep Delivery</h5>
                            <p>The parcel is sorted at our city terminal and delivered directly to the recipient's doorstep.</p>
                        </div>
                    </div>

                    <div class="p-4 bg-light border-start border-5 border-danger rounded-3 mt-5">
                        <h5 class="fw-bold text-danger mb-2">Flexible Part-Load Shifting</h5>
                        <p class="mb-0 text-muted small">
                            We accept parcels of all sizes, from single boxes to partial household loads. Our customer support desk handles all queries regarding arrival times and tracking.
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
