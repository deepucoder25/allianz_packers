<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">About Us</span>
        </nav>
        <h1><span class="bc-title-white">About</span> <span class="bc-title-orange">Us</span></h1>
        <p class="bc-desc">Learn more about our history, values, infrastructure, and the expert team dedicated to your seamless move.</p>
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
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2 class="service-section-title">Who We Are</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            <strong><?= $company3 ?></strong> is a professional relocation company dedicated to providing safe, efficient, and customer-focused moving solutions. We specialize in helping individuals, families, and businesses relocate their belongings with confidence and peace of mind. With a strong focus on service quality and organized relocation support, we have become a trusted choice for people seeking reliable relocation support. Our approach combines careful planning, experienced manpower, and responsible handling to ensure every move is completed smoothly.
                        </p>
                    </div>

                    <!-- Mission & Vision Dual Cards -->
                    <div class="row g-4 mt-2 mb-5">
                        <div class="col-md-6">
                            <div class="about-mv-card p-4 rounded-4 shadow-sm border h-100 position-relative">
                                <div class="mv-icon-badge mb-3 bg-red-soft text-red">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                                <h4 class="fw-bold mb-2">Our Mission</h4>
                                <p class="text-muted small mb-0">
                                   Our mission is to deliver dependable relocation services that make moving simpler, safer, and more convenient. We aim to provide practical solutions, transparent communication, and exceptional customer support while maintaining high standards of professionalism in every project we undertake.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-mv-card p-4 rounded-4 shadow-sm border h-100 position-relative">
                                <div class="mv-icon-badge mb-3 bg-dark-soft text-dark">
                                    <i class="bi bi-eye-fill"></i>
                                </div>
                                <h4 class="fw-bold mb-2">Our Vision</h4>
                                <p class="text-muted small mb-0">
                                   Our vision is to become one of the most trusted and respected names in the relocation industry by consistently exceeding customer expectations. We aspire to build long-term relationships based on trust, reliability, and service excellence while continuously improving our operations and customer experience.
                                </p>
                            </div>
                        </div>
                    </div>
                     <h3>Our Story</h3>
                    <p>The journey of <b><?= $company3 ?></b> began with a simple idea: moving should be easier than people expect it to be. We noticed that many customers faced unnecessary stress during relocation due to poor coordination, lack of communication, and unsafe handling practices. Determined to make a difference, we built a company focused on professionalism, transparency, and customer care. As more customers recommended our services to friends, families, and businesses, we expanded our operations while continuing to focus on organized planning, careful handling, and responsive customer support. Today, we continue to grow while maintaining the same values that inspired our foundation.</p>

                    <span class="fs-4">What We Do</span>
                    <p>We provide comprehensive relocation services designed to meet a variety of moving requirements. Our solutions include household shifting, office relocation, packing and unpacking assistance, vehicle transportation, loading and unloading services, storage support, and domestic moving services. Every relocation project is planned according to the customer's specific needs, ensuring an organized and efficient moving experience from start to finish.</p>

                    <span class="fs-4">Our Approach to Relocation</span>
                    <p>At <?= $company3 ?>, every move begins with understanding the customer's specific requirements. We assess packing needs, transportation arrangements, handling requirements, and delivery expectations before creating a relocation plan. This organized approach helps improve coordination, reduce unnecessary delays, and provide a smoother moving experience from start to finish.</p>

                    <span class="fs-5">Understanding Every Move</span>
                    <p>No two relocations are exactly alike. Some customers require complete household shifting services, while others need office equipment, important documents, furniture, or vehicles transported safely. Our team takes the time to understand individual requirements and create a relocation plan that matches the customer's schedule, destination, and moving priorities.</p>
                    <span class="fs-5">Our Core Values</span>
                    <p>At <?= $company3 ?>, our work is guided by honesty, responsibility, customer satisfaction, teamwork, and continuous improvement. These values influence every decision we make and help us maintain the trust of our customers.</p>

                    <h4>Why Customers Choose Us</h4>
                    <p>Customers choose <em><?= $company3 ?></em> because we prioritize safety, reliability, and transparency. We provide clear communication, professional handling, quality packing materials, and timely execution of services. Our focus is not only on moving belongings but also on ensuring a comfortable and stress-free relocation experience.</p>


                    <!-- Client satisfaction banner -->
                    <div class="about-commitment-card p-4 border-start border-5 rounded-4 mt-5 d-flex align-items-start gap-3">
                        <div class="commitment-icon text-danger">
                            <i class="bi bi-patch-check-fill fs-2"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Committed to Better Relocation Experiences</h5>
                            <p class="mb-0 text-muted small">
                                At <?= $company3 ?>, we believe relocation should be organized, transparent, and carefully managed from beginning to end. Our team continues to improve processes, communication, and service standards so that customers can move with greater confidence and convenience.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'about-us']); ?>
            </div>
        </div>
    </div>
</section>

