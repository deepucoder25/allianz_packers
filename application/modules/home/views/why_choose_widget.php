<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="why-choose-section py-5 bg-light-section position-relative overflow-hidden">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- Left Column: Image with Experience Badge -->
      <div class="col-lg-6 col-12">
        <div class="choose-image-wrapper position-relative">
          <img src="<?= base_url('assets/images/services_modules/img2.jpg') ?>" class="choose-main-img w-100 img-fluid" alt="Why Choose <?= $company3 ?>" loading="lazy">
          
          <!-- Decorative Background Frame -->
          <div class="choose-image-frame"></div>
          
          <!-- Floating Experience Badge -->
          <div class="choose-floating-badge d-flex align-items-center gap-3">
            <div class="badge-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/>
                <polyline points="12 6 12 12 16 14"/>
              </svg>
            </div>
            <div class="badge-text-wrap">
              <span class="badge-number"><?= $experience ?></span>
              <span class="badge-label">Years of Trust</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Content & Connected Timeline Advantages -->
      <div class="col-lg-6 col-12">
        <div class="choose-right-content-box">
          <span class="choose-eyebrow text-uppercase d-inline-block mb-2">The Allianz Advantage</span>
          <h2 class="choose-main-title mb-3">Why Choose <span><?=$company3?></span></h2>
          <div class="choose-title-line mb-4"></div>
          <p class="choose-main-desc mb-4">
            Our customers choose us because we focus on planning, communication, and careful execution throughout the relocation process. From household shifting and office relocation to vehicle transportation and storage support, every move is handled according to the customer's specific requirements. We provide transparent quotations, quality packing materials, trained relocation professionals, and regular updates to help customers stay informed from pickup to delivery. Whether customers are relocating a small apartment, a family home, a corporate office, or a vehicle, our approach remains the same: careful planning, organized execution, and consistent communication throughout the relocation process.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>
