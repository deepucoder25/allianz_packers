<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Privacy Policy</span>
        </nav>
        <h1><span class="bc-title-white">Privacy</span> <span class="bc-title-orange">Policy</span></h1>
        <p class="bc-desc">Learn how <?= $company3 ?> collects, protects, and handles your personal relocation details with strict safety standards.</p>
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
                        <strong><?= $company3 ?></strong> regards the security of its clients and visitors. We completely regard your entitlement to security, and won't gather any close to home information on this website until you willingly submit your individual information to us.
                    </p>

                    <hr class="my-4 opacity-10">

                    <h3 class="fw-bold mb-3 about-doc-subtitle"><i class="bi bi-collection-fill me-2 text-danger"></i>1. Information Collection &amp; Registration</h3>
                    <p class="text-muted mb-4">
                        Our website gathers names, email addresses, and other individual information from clients and visitors only when submitted through one of our online forms, for example, our enquiry or mailing list registration form. This information is utilized exclusively by <strong><?= $company3 ?></strong> and is not shared, exchanged, or sold to outsiders. Visitors can withdraw from our mailing list on the off chance that they wish to withdraw. The said email ID will be expelled from our database right away.
                    </p>

                    <h3 class="fw-bold mb-3 about-doc-subtitle"><i class="bi bi-share-fill me-2 text-danger"></i>2. Outgoing Links &amp; Third-Party Sites</h3>
                    <p class="text-muted mb-4">
                        Our website contains connections that redirect to other websites over which we have no control. Please note that when you click on one of these connections, you are getting to another website and <strong><?= $company3 ?></strong> won't be responsible for any information partaken in those websites and will be solely at the visitor's own risk.
                    </p>

                    <h3 class="fw-bold mb-3 about-doc-subtitle"><i class="bi bi-shield-fill-check me-2 text-danger"></i>3. Consent &amp; Policy Amendments</h3>
                    <p class="text-muted mb-4">
                        By utilizing the services of <strong><?= $company3 ?></strong>, you signify your consent to our protection arrangement as expressed above. Note that this approach may be revised occasionally without prior notice. Please re-read this arrangement preceding presenting any personal information in the event that you have worries about how your information is being gathered and utilized.
                    </p>

                    <h3 class="fw-bold mb-3 about-doc-subtitle"><i class="bi bi-envelope-fill me-2 text-danger"></i>4. Contact Information</h3>
                    <p class="text-muted mb-4">
                        If you have any questions or concerns about this Privacy Policy or task operations of our website, please keep in touch with us at:
                    </p>
                    <div class="p-4 bg-light rounded-4 border border-light-subtle d-inline-block text-start">
                        <h6 class="fw-bold mb-2"><?= $company3 ?></h6>
                        <p class="small text-muted mb-1"><i class="bi bi-geo-alt-fill me-2 text-danger"></i>Address: <?= $address ?></p>
                        <p class="small text-muted mb-1"><i class="bi bi-envelope-fill me-2 text-success"></i>Email: <a href="<?= $mailhtml ?>" class="text-danger text-decoration-none fw-semibold"><?= $mail ?></a></p>
                        <p class="small text-muted mb-0"><i class="bi bi-telephone-fill me-2 text-warning"></i>Phone: <a href="<?= $phonehtml ?>" class="text-danger text-decoration-none fw-semibold"><?= $phone ?></a></p>
                        <p class="small text-muted mb-0"><i class="bi bi-telephone-fill me-2 text-warning"></i>Phone: <a href="<?= $phonehtml1 ?>" class="text-danger text-decoration-none fw-semibold"><?= $phone1 ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
