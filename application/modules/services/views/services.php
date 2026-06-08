<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Our Services</span>
        </nav>
        <h1><span class="bc-title-white">Our Packing &amp;</span> <span class="bc-title-orange">Moving Services</span></h1>
        <p class="bc-desc">We offer professional, efficient, and cost-effective packing and moving solutions across India. Check out our wide range of tailored services below.</p>
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
                <div class="pill-text"><strong>Expert Team</strong><small>Pan-India SupportStaff</small></div>
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

<!-- Services Listing Grid -->
<section class="service-details-section">
    <div class="container">
        <div class="services-grid">
            <?php
            $services_list = [
                [
                    'slug' => 'home-relocation',
                    'name' => 'Home Relocation',
                    'icon' => 'bi-house-heart',
                    'desc' => 'Professional household shifting services with safety guaranteed. Safe packaging, loading, transport, and unpacking of your precious memories.'
                ],
                [
                    'slug' => 'office-shifting',
                    'name' => 'Office Shifting',
                    'icon' => 'bi-building-gear',
                    'desc' => 'Minimize downtime with our corporate and business relocation services. Experienced staff handles computers, records, and office furniture securely.'
                ],
                [
                    'slug' => 'car-transportation',
                    'name' => 'Car Transportation',
                    'icon' => 'bi-car-front',
                    'desc' => 'Secure car carrier and transport options to ship your vehicles across India. Damage-free door-to-door transit under safety supervision.'
                ],
                [
                    'slug' => 'transportation-service',
                    'name' => 'Transportation Service',
                    'icon' => 'bi-truck',
                    'desc' => 'Fast, safe, and commercial goods transportation service. A huge fleet of clean container trucks handles logistics with tracking.'
                ],
                [
                    'slug' => 'door-to-door-moving',
                    'name' => 'Door to Door Moving',
                    'icon' => 'bi-door-open',
                    'desc' => 'Comprehensive shifting solutions covering complete doorstep-to-doorstep transition, packing, transporting, loading, and setup.'
                ],
                [
                    'slug' => 'warehouse-services',
                    'name' => 'Warehouse Services',
                    'icon' => 'bi-box-seam',
                    'desc' => 'Short-term and long-term secure warehousing & storage solutions. 24/7 monitored, clean, pest-controlled, and fire-safe facilities.'
                ],
                [
                    'slug' => 'parcel-services',
                    'name' => 'Parcel Services',
                    'icon' => 'bi-gift',
                    'desc' => 'Cost-effective part-load and single parcel delivery services. Safe and reliable parcel shifting for household goods and business products.'
                ],
                [
                    'slug' => 'insurance',
                    'name' => 'Transit Insurance',
                    'icon' => 'bi-shield-check',
                    'desc' => 'Complete financial peace of mind. Comprehensive transit insurance coverage protects your goods against any unforeseen damage on the road.'
                ],
            ];

            foreach ($services_list as $s):
            ?>
                <div class="service-card">
                    <div class="service-card-header">
                        <div class="service-card-icon-box">
                            <i class="bi <?= $s['icon'] ?>"></i>
                        </div>
                    </div>
                    <div class="service-card-body">
                        <h4 class="service-card-title"><?= $s['name'] ?></h4>
                        <p class="service-card-text"><?= $s['desc'] ?></p>
                        <div class="service-card-footer">
                            <a href="<?= site_url($s['slug']) ?>" class="service-card-btn">
                                Read More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
