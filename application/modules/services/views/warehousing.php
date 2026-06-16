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
                    <h2 class="service-section-title">Warehouse Service</h2>
                    <p>Most people underestimate what goes into proper Warehouse Service. The difference between adequate and excellent? Experience, attention to detail, and the right approach. Whether you are shifting your home or need space for business inventory, you deserve a secure spot for your belongings.</p>

<p><strong><?= $company3 ?></strong> provides Warehouse Service designed to give you peace of mind. You don't just need a room; you need a climate-controlled, pest-free, and highly monitored environment. Professional storage is about more than space. It helps protect furniture, household goods, business inventory, documents, and equipment from moisture, dust, pests, and unnecessary damage. They should remain in the exact condition you left them. If you’re searching for <b>Warehouse Services Near Me</b>, we’re here to help.</p>

                    <h3 class="service-section-title mt-5">What’s Included in Our Warehouse Service</h3>
                    <p>Our Warehouse Service is about more than just square footage. We take a systematic approach to protecting your goods.</p>
                    <ul class="service-features-list">
                        <li><i class="bi bi-check-circle-fill"></i> <span>Professional packing and crating</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span>Inventory tagging and tracking</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span>Climate-controlled storage units</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span>24/7 CCTV surveillance</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span>Regular pest control treatments</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span>Insurance documentation support</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span>Flexible short-term and long-term rental plans</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span>Scheduled access for clients</span></li>
                    </ul>
                    <h4 class="service-section-title mt-4">Why Choose Professional Warehouse Service</h4>
                    <p>Yes, Warehouse Service requires investment, but here is why it’s worth it. Moving is already taxing, and you don’t need the added stress of worrying about your goods. Professional providers handle the logistics, security, and maintenance. We manage the heavy lifting so you don't have to. You'll find that the best <b>Warehouse Services</b> are those that prioritize item safety above all else. For instance, when handling expensive electronics or wooden furniture, we use specific anti-moisture padding to stop damage before it starts (a small detail that makes a massive difference).</p>

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
                    <span class="fs-4 fw-bold">Our Warehouse Service Process</span>
                    <p>We begin by assessing exactly what you need to store. Our team visits your site to survey the items, ensuring we have the right space ready. Once we finalize the inventory list, we handle the professional packing at your location. We tag every single box.</p>

<p>We then transport your goods to our facility. Upon arrival, we place your items in your assigned unit, creating a digital record for you to review. You can visit or request retrieval anytime. It’s that simple.</p>

                    <div class="p-4 bg-light border-start border-5 border-danger rounded-3 mt-5">
                        <h6 class="fw-bold text-danger mb-2">Pricing Factors for Warehouse Service</h6>
                       <p>Transparent pricing is non-negotiable. We base our rates on the volume of goods, the duration of storage, and any special handling needs like climate control. You won’t find hidden fees here. We believe in providing value for your hard-earned money.</p>
                    </div>
                    <?php
                    $office_faqs = [
                         [
                            'q' => "Is my property insured while in storage?",
                            'a' => 'Yes, we provide guidance on insurance options to protect your goods during the entire Warehouse Service period.',
                            'icon' => 'bi-clock'
                        ],
                        [
                            'q' => 'How do I access my stored items?',
                            'a' => 'You can schedule a visit by calling us 24 hours in advance, ensuring our team is ready to assist you.',
                            'icon' => 'bi-pc-display'
                        ],
                        [
                            'q' => 'Do you offer Warehouse Service Near Me for short periods?',
                            'a' => 'Absolutely. We offer flexible plans starting from a single month to accommodate your specific timeline.',
                            'icon' => 'bi-list-check'
                        ],
                        [
                            'q' => 'How is pricing calculated for Warehouse Service?',
                            'a' => 'Costs depend on the total volume of your items and the type of storage unit selected.',
                            'icon' => 'bi-geo-alt'
                        ],
                        [
                            'q' => 'Is the facility secure?',
                            'a' => 'We use 24/7 CCTV monitoring and professional security personnel to maintain a safe environment.',
                            'icon' => 'bi-list-check'
                        ],
                        [
                            'q' => 'Can I store delicate items like paintings?',
                            'a' => 'Yes, we provide specialized handling and climate control for fragile items.',
                            'icon' => 'bi-geo-alt'
                        ]
                    ];
                    $this->load->view('packers_movers/city_page_design/city_faq', ['faqs' => $office_faqs]);
                    ?>
                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar'); ?>
            </div>
        </div>
    </div>
</section>
