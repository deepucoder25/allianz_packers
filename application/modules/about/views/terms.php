<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Terms &amp; Conditions</span>
        </nav>
        <h1><span class="bc-title-white">Terms &amp;</span> <span class="bc-title-orange">Conditions</span></h1>
        <p class="bc-desc">Please read the terms and guidelines governing all relocations, bookings, and operations at <?= $company3 ?>.</p>
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
                <div class="pill-text"><strong>Expert Team</strong><small>CMD to Branch Staff</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <div class="pill-text"><strong>Pan-India</strong><small>100+ Branches</small></div>
            </div>
        </div>
    </div>
    <div class="bc-wave-wrap">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 64" preserveAspectRatio="none">
            <path d="M0,30 C480,64 960,0 1440,30 L1440,64 L0,64 Z" fill="#ffffff"/>
        </svg>
    </div>
</section>

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-document-card p-4 p-md-5 rounded-4 shadow-sm bg-white border border-light-subtle text-start">
                    
                    <p class="lead text-muted mb-4">
                        Welcome to <strong><?= $company3 ?></strong>. These Terms &amp; Conditions govern all relocations, slot bookings, and transport operations. By booking a move or using our services, you agree to be bound by these terms.
                    </p>

                    <hr class="my-4 opacity-10">

                    <h3 class="fw-bold mb-3 about-doc-subtitle"><i class="bi bi-calendar-check-fill me-2 text-danger"></i>1. Service Bookings &amp; Shifting Quotes</h3>
                    <ul class="about-doc-list mb-4 text-muted">
                        <li>Shifting quotes are generated based on the apartment &amp; room size, inventory list of goods to be moved, movement date, and movement distance.</li>
                        <li>Choosing the right movers and packers is crucial; therefore, please ensure all details provided during booking are accurate. We always share transparent quotes including all costs with no hidden fees.</li>
                    </ul>

                    <h3 class="fw-bold mb-3 about-doc-subtitle"><i class="bi bi-cash-coin me-2 text-danger"></i>2. Advance Token Payments</h3>
                    <ul class="about-doc-list mb-4 text-muted">
                        <li>Customers are required to pay a token amount in advance to confirm slot bookings.</li>
                        <li>This token payment helps avoid last-minute delays or inconveniences and will be adjusted in the final quotation payment.</li>
                    </ul>

                    <h3 class="fw-bold mb-3 about-doc-subtitle"><i class="bi bi-arrow-left-right me-2 text-danger"></i>3. Rescheduling &amp; Cancellation Policy</h3>
                    <ul class="about-doc-list mb-4 text-muted">
                        <li>We understand that shifting plans can change at any time. You get a **FREE Cancellation** policy when you book with us, ensuring no financial risk.</li>
                        <li>You can reschedule your movement by informing your dedicated move manager at least 2 days before the booked date.</li>
                        <li>Changes to the relocation date are FREE of cost for the following categories: weekdays to weekdays, weekend to weekend, and weekend to weekdays.</li>
                    </ul>

                    <h3 class="fw-bold mb-3 about-doc-subtitle"><i class="bi bi-wrench-adjustable me-2 text-danger"></i>4. Furniture Dismantling &amp; Assembly</h3>
                    <ul class="about-doc-list mb-4 text-muted">
                        <li>Our packers and movers will dismantle and assemble beds and other standard furniture items.</li>
                        <li>This service is provided without any extra costs, provided that the dedicated shifting manager is notified beforehand.</li>
                    </ul>

                    <h3 class="fw-bold mb-3 about-doc-subtitle"><i class="bi bi-shield-fill-check me-2 text-danger"></i>5. Transit Insurance &amp; Liability</h3>
                    <ul class="about-doc-list mb-4 text-muted">
                        <li>To protect costly household goods, we provide goods insurance policies along with our relocation services.</li>
                        <li>You can insure your items by informing your dedicated move manager prior to the move. Customers will be required to purchase our secured package, which includes insurance coverage and other benefits.</li>
                    </ul>

                    <h3 class="fw-bold mb-3 about-doc-subtitle"><i class="bi bi-envelope-fill me-2 text-danger"></i>6. Contact Us</h3>
                    <p class="text-muted mb-4">
                        If you have any questions about our Terms &amp; Conditions, please get in touch with us:
                    </p>
                    <div class="p-4 bg-light rounded-4 border border-light-subtle d-inline-block text-start">
                        <h6 class="fw-bold mb-2"><?= $company3 ?></h6>
                        <p class="small text-muted mb-1"><i class="bi bi-envelope-fill me-2 text-success"></i>Email: <a href="<?= $mailhtml ?>" class="text-danger text-decoration-none fw-semibold"><?= $mail ?></a></p>
                        <p class="small text-muted mb-0"><i class="bi bi-telephone-fill me-2 text-warning"></i>Phone: <a href="<?= $phonehtml ?>" class="text-danger text-decoration-none fw-semibold"><?= $phone ?></a></p>
                        <p class="small text-muted mb-0"><i class="bi bi-telephone-fill me-2 text-warning"></i>Phone: <a href="<?= $phonehtml1 ?>" class="text-danger text-decoration-none fw-semibold"><?= $phone1 ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
