<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="about-section position-relative overflow-hidden py-0">
  <div class="container-fluid p-0">
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
            <strong>Allianz Packers and Movers Pvt. Ltd.</strong> is a leading packing and moving company in India, offering a wide range of relocation services including home shifting, office shifting, car & bike transportation, loading/unloading, cargo, and transit insurance at competitive prices. All your possessions are packed by expert hands and transported to your new destination safely and on time.
          </p>
          <p class="about-desc mb-4">
            We ensure a smooth, secure, and stress-free moving experience. Allianz Packers and Movers cares about your peace of mind, taking the worry out of shifting your belongings and vehicles so you can focus on your new journey.
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
        <img src="<?=base_url('assets/images/services_modules/img1.jpg') ?>" alt="Allianz Packers Movers" class="about-img w-100 h-100 object-fit-cover" loading="lazy">
      </div>

  </div>
</section>
