<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="about-section position-relative overflow-hidden py-5">
  <div class="container">
    <div class="row g-0">
      
      <!-- Left Content Column -->
      <div class="col-lg-6 bg-white d-flex align-items-center position-relative z-3">
        <div class="about-content-wrap">
          
          <!-- Tagline -->
          <div class="about-tagline d-flex align-items-center gap-2 mb-3">
            <span class="tagline-line"></span>
            <span class="tagline-text">ABOUT US</span>
            <span class="tagline-line"></span>
          </div>

          <!-- Heading -->
          <h2 class="about-heading mb-3">
            Every Move Tells a Story.<br>
            We Make It a <span class="highlight-red">Great One.</span>
          </h2>

          <!-- Red Line Divider -->
          <div class="about-divider mb-4"></div>

          <!-- Description paragraphs from old website -->
          <p class="about-desc mb-3">
            <b><?= $company3 ?></b> provides household shifting, office relocation, vehicle transportation, packing, loading, unloading, and storage solutions for customers looking for a safe and organized moving experience. From local moves within the city to long-distance relocations across India, our team focuses on careful handling, timely delivery, and clear communication at every stage of the move. We understand that relocating a home, office, or business is more than simply transporting belongings. It involves planning, care, timing, and trust. Our team works closely with every customer to ensure a smooth experience from the first call until the final delivery. If you are looking for reliable Packers and Movers who genuinely care about your belongings, you are in the right place.
          </p>

          <!-- Read More Button -->
          <div class="about-btn-wrap">
            <a href="<?= site_url('about-us') ?>" class="about-btn">Read More</a>
          </div>

        </div>

        <!-- SVG Curve Divider -->
        <div class="about-curve-divider d-none d-lg-block">
          <svg viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <!-- White wave background extension -->
            <path d="M0,0 L100,0 C30,35 30,65 100,100 L0,100 Z" fill="#ffffff" />
            <!-- Red wave border line -->
            <path d="M100,0 C30,35 30,65 100,100" fill="none" stroke="var(--brand-red)" stroke-width="3" vector-effect="non-scaling-stroke" />
          </svg>
        </div>

      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 position-relative min-vh-50 about-image-col">
        <img src="<?=base_url('assets/images/services_modules/img1.jpg') ?>" alt="<?= $company3 ?> Moving Services" class="about-img w-100 h-100 object-fit-cover" loading="lazy">
      </div>

    </div>
    <div class="col-12 mt-3">
      <p><strong><?= $company3 ?></strong> offers a complete range of relocation solutions for residential and commercial customers. Our services include household shifting, office relocation, packing and unpacking assistance, vehicle transportation, loading and unloading support, domestic moving, and storage solutions. Every move is carefully planned according to your requirements, ensuring that furniture, electronics, documents, and personal belongings reach their destination safely. As one of the preferred <b>Packers and Movers</b> companies, we focus on delivering practical solutions that save time and simplify relocation. Over the years, we have assisted customers with household shifting, office relocation, vehicle transportation, and other moving requirements across different distances and timelines. Each relocation is planned individually because no two moves are exactly the same.</p>
    </div>
  </div>
</section>
