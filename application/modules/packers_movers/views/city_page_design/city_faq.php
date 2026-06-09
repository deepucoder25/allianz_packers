<!-- FAQ Section -->
<div class="city-content-card mt-4">
  
  <!-- FAQ Header Section -->
  <div class="faq-header-wrapper d-flex justify-content-between align-items-start mb-4">
    <div class="faq-header-left">
      <span class="faq-badge">FAQS</span>
      <h3 class="faq-main-title mt-2">Frequently <span class="text-highlight">Asked Questions</span></h3>
      <p class="faq-subtitle mb-0 text-muted">Find answers to common questions about our packing and moving services in <?= $city ?>.</p>
    </div>
    <div class="faq-header-right d-none d-md-block">
      <div class="faq-graphic-wrap">
        <div class="faq-dots"></div>
        <div class="faq-bubble-light">...</div>
        <div class="faq-bubble-red">?</div>
      </div>
    </div>
  </div>

  <!-- FAQ Accordion List -->
  <div class="city-faq-list mt-3" id="cityFaqAccordion">
    <?php if (isset($faqs) && is_array($faqs)): ?>
    <?php foreach ($faqs as $i => $faq): ?>
    <div class="city-faq-item mb-3">
      <button class="city-faq-btn d-flex align-items-center justify-content-between <?= $i === 0 ? '' : 'collapsed' ?>" type="button"
              data-bs-toggle="collapse"
              data-bs-target="#cfaq<?= $i ?>"
              aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>">
        <div class="faq-btn-left d-flex align-items-center gap-3">
          <div class="faq-toggle-icon-wrap">
            <i class="bi bi-plus faq-icon-plus"></i>
            <i class="bi bi-dash faq-icon-minus"></i>
          </div>
          <span class="faq-question-text"><?= ($i+1) . ". " . $faq['q'] ?></span>
        </div>
        <div class="faq-right-icon-wrap">
          <i class="bi <?= $faq['icon'] ?>"></i>
        </div>
      </button>
      <div id="cfaq<?= $i ?>" class="collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#cityFaqAccordion">
        <div class="city-faq-body">
          <?= $faq['a'] ?>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Bottom Support Contact Bar -->
  <div class="faq-contact-bar mt-4 d-flex align-items-center justify-content-between">
    <div class="faq-contact-left d-flex align-items-center gap-3">
      <div class="faq-contact-icon">
        <i class="bi bi-headset"></i>
      </div>
      <div class="faq-contact-text">
        <h5 class="faq-contact-title m-0">Still have questions?</h5>
        <p class="faq-contact-subtitle m-0 text-muted">Our support team is here to help you!</p>
      </div>
    </div>
    <div class="faq-contact-right">
      <a href="<?= site_url('contact-us') ?>" class="faq-contact-btn btn">CONTACT US</a>
    </div>
  </div>

</div>