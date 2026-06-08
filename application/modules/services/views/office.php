<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-services') ?>">Services</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Office Shifting</span>
        </nav>
        <h1><span class="bc-title-white">Office</span> <span class="bc-title-orange">Shifting</span></h1>
        <p class="bc-desc">Professional corporate relocation and office shifting solutions. We minimize business downtime with quick, organized, and secure transitions.</p>
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
                <div class="pill-text"><strong>Expert Team</strong><small>Pan-India Staff</small></div>
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
                    <h2 class="service-section-title">Strategic Office &amp; Corporate Relocation</h2>
                    <p>
                        Office relocation requires careful planning, structured coordination, and rapid execution to prevent business disruption. At <strong><?= $company3 ?></strong>, we are experts in shifting corporate offices, IT infrastructures, manufacturing units, and employee household goods with high precision and care.
                    </p>
                    <p>
                        Our specialized corporate moving team understands the value of time in business. We coordinate with your administration or facility management department to design a phased relocation schedule. This often involves executing moves during weekends or holiday hours, ensuring your employees can resume work with minimal downtime.
                    </p>

                    <h3 class="service-section-title mt-5">Corporate Shifting Competencies</h3>
                    <ul class="service-features-list">
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>IT Equipment Handling:</strong> Safe packing of servers, desktops, printers, and delicate networking systems in anti-static materials.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Record &amp; File Management:</strong> Categorized and labeled file boxing systems to ensure confidential records remain organized.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Modular Furniture Setup:</strong> Professional disassembly and installation of office desks, cubicles, and conference tables.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span><strong>Heavy Equipment Loading:</strong> Special cranes and equipment to load and transport heavy machinery or pantry units.</span></li>
                    </ul>

                    <h3 class="service-section-title mt-5">Our Office Shifting Methodology</h3>
                    <div class="service-process-timeline">
                        <div class="service-process-step">
                            <h5>1. Pre-Move Inventory Planning</h5>
                            <p>Our corporate relocation managers survey your office, classify items, and draw up a detailed floor plan and timeline.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>2. Systematic Tagging &amp; Packing</h5>
                            <p>Every desk and computer system is systematically labeled and packed using color-coded boxes for simple sorting at the new destination.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>3. Secure Transit &amp; Freight</h5>
                            <p>We transport corporate goods inside enclosed, clean container trucks driven by verified drivers to ensure maximum security.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>4. Unloading &amp; Placement</h5>
                            <p>We unload and organize packed desks, files, and server systems directly to their designated locations as per your department layout plans.</p>
                        </div>
                    </div>

                    <div class="p-4 bg-light border-start border-5 border-danger rounded-3 mt-5">
                        <h5 class="fw-bold text-danger mb-2">Accredited Transporters</h5>
                        <p class="mb-0 text-muted small">
                            <?= $company3 ?> offers IBA-approved official billing options and formal contract templates for seamless reimbursement and corporate relocation audits.
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
