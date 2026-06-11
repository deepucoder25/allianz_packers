<footer class="main-footer">
  <!-- Section 0: Wavy Top Divider -->
  <div class="footer-top-wave">
    <svg viewBox="0 0 1440 100" class="footer-wave-svg" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,35 C480,85 960,5 1440,45 L1440,80 L0,80 Z" fill="var(--brand-red)"></path>
      <path d="M0,45 C480,95 960,15 1440,55 L1440,100 L0,100 Z" fill="#ffffff"></path>
    </svg>
  </div>

  <!-- Section 1: Main Columns -->
  <div class="footer-columns-section py-5">
    <div class="container position-relative">
      
      <!-- Moving Truck Image -->
      <img src="<?= base_url('assets/images/home_modules/moving_truck.jpg') ?>" alt="<?= $company3 ?> Moving Truck" class="footer-truck-img d-none d-xl-block" loading="lazy">
      
      <div class="row">
        <!-- Column 1: Brand Info -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="footer-brand-wrap mb-3">
            <a href="<?= site_url() ?>">
              <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="<?= $company3 ?>" class="footer-logo-img" loading="lazy">
            </a>
          </div>
          <p class="footer-desc-text mb-4">
            <?= $company3 ?> is your trusted relocation partner, providing reliable, secure and affordable moving solutions worldwide.
          </p>
          <div class="footer-contact-details d-flex flex-column gap-3">
            <div class="footer-contact-item d-flex align-items-center gap-3">
              <span class="footer-contact-icon-circle"><i class="bi bi-telephone-fill"></i></span>
              <a href="<?= $phonehtml ?>" class="footer-contact-link"><?= $phone ?></a>
            </div>
            <div class="footer-contact-item d-flex align-items-center gap-3">
              <span class="footer-contact-icon-circle"><i class="bi bi-envelope-fill"></i></span>
              <a href="<?= $mailhtml ?>" class="footer-contact-link"><?= $mail ?></a>
            </div>
            <div class="footer-contact-item d-flex align-items-start gap-3">
              <span class="footer-contact-icon-circle mt-1"><i class="bi bi-geo-alt-fill"></i></span>
              <span class="footer-contact-text"><?= $address ?></span>
            </div>
            <div class="footer-contact-item d-flex align-items-center gap-3">
              <span class="footer-contact-icon-circle"><i class="bi bi-clock-fill"></i></span>
              <span class="footer-contact-text">24/7 Hours Available</span>
            </div>
          </div>
        </div>

        <!-- Column 2: Our Services -->
        <div class="col-lg-2 col-md-6 mb-4">
          <h4 class="footer-col-title">OUR SERVICES</h4>
          <ul class="footer-links-list list-unstyled m-0 p-0">
            <li><a href="<?= site_url('home-relocation') ?>"><i class="bi bi-chevron-right"></i> Home Relocation</a></li>
            <li><a href="<?= site_url('office-shifting') ?>"><i class="bi bi-chevron-right"></i> Office Shifting</a></li>
            <li><a href="<?= site_url('car-transportation') ?>"><i class="bi bi-chevron-right"></i> Car Transportation</a></li>
            <li><a href="<?= site_url('transportation-service') ?>"><i class="bi bi-chevron-right"></i> Transportation Service</a></li>
            <li><a href="<?= site_url('door-to-door-moving') ?>"><i class="bi bi-chevron-right"></i> Door to Door Moving</a></li>
            <li><a href="<?= site_url('warehouse-services') ?>"><i class="bi bi-chevron-right"></i> Warehouse Services</a></li>
            <li><a href="<?= site_url('parcel-services') ?>"><i class="bi bi-chevron-right"></i> Parcel Services</a></li>
            <li><a href="<?= site_url('insurance') ?>"><i class="bi bi-chevron-right"></i> Transit Insurance</a></li>
          </ul>
        </div>

        <!-- Column 3: Quick Links -->
        <div class="col-lg-2 col-md-6 mb-4 col-6">
          <h4 class="footer-col-title">QUICK LINKS</h4>
          <ul class="footer-links-list list-unstyled m-0 p-0">
            <li><a href="<?= site_url() ?>"><i class="bi bi-chevron-right"></i> Home</a></li>
            <li><a href="<?= site_url('about-us') ?>"><i class="bi bi-chevron-right"></i> About Us</a></li>
            <li><a href="<?= site_url('why-choose-us') ?>"><i class="bi bi-chevron-right"></i> Why Choose Us</a></li>
            <li><a href="<?= site_url('testimonials') ?>"><i class="bi bi-chevron-right"></i> Testimonials</a></li>
            <li><a href="<?= site_url('blog') ?>"><i class="bi bi-chevron-right"></i> Blog</a></li>
            <li><a href="<?= site_url('contact-us') ?>"><i class="bi bi-chevron-right"></i> Contact Us</a></li>
          </ul>
        </div>

        <!-- Column 4: Support -->
        <div class="col-lg-2 col-md-6 mb-4 col-6">
          <h4 class="footer-col-title">SUPPORT</h4>
          <ul class="footer-links-list list-unstyled m-0 p-0">
            <li><a href="<?= site_url('faqs') ?>"><i class="bi bi-chevron-right"></i> FAQs</a></li>
            <li><a href="<?= site_url('moving-tips') ?>"><i class="bi bi-chevron-right"></i> Moving Tips</a></li>
            <li><a href="<?= site_url('terms-and-conditions') ?>"><i class="bi bi-chevron-right"></i> Terms & Conditions</a></li>
            <li><a href="<?= site_url('privacy-policy') ?>"><i class="bi bi-chevron-right"></i> Privacy Policy</a></li>
          </ul>
        </div>

        <!-- Column 5: Call Widget -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="footer-help-card">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="help-card-icon-circle">
                <i class="bi bi-telephone-inbound-fill"></i>
              </div>
              <div class="help-card-text">
                <span class="help-card-title">NEED HELP?</span>
                <span class="help-card-subtitle">We're here to help make your move easy.</span>
              </div>
            </div>
            
            <a href="<?= $phonehtml ?>" class="help-card-btn text-decoration-none d-flex align-items-center gap-2">
              <div class="help-card-btn-icon-wrap">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <div class="help-card-btn-text-wrap">
                <span class="help-btn-label">CALL US NOW</span>
                <span class="help-btn-num"><?= $phone ?></span>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Section 2: Wave Divider -->
  <div class="footer-wave-container">
    <svg viewBox="0 0 1440 100" class="footer-wave-svg" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,35 C480,85 960,5 1440,45 L1440,80 L0,80 Z" fill="var(--brand-red)"></path>
      <path d="M0,45 C480,95 960,15 1440,55 L1440,100 L0,100 Z" fill="#151515"></path>
    </svg>
  </div>

  <!-- Section 3: Trust Badges Bar -->
  <div class="footer-trust-bar py-4">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center gap-4 flex-wrap">
        
        <!-- Badge 1 -->
        <div class="trust-badge d-flex align-items-center gap-3">
          <div class="trust-badge-icon">
            <i class="bi bi-shield-fill-check"></i>
          </div>
          <div class="trust-badge-content">
            <span class="trust-badge-title">100% SAFE & SECURE</span>
            <span class="trust-badge-desc">We ensure complete safety of your belongings.</span>
          </div>
        </div>

        <!-- Badge 2 -->
        <div class="trust-badge d-flex align-items-center gap-3">
          <div class="trust-badge-icon">
            <i class="bi bi-people-fill"></i>
          </div>
          <div class="trust-badge-content">
            <span class="trust-badge-title">EXPERIENCED TEAM</span>
            <span class="trust-badge-desc">Skilled professionals who care for your move.</span>
          </div>
        </div>

        <!-- Badge 3 -->
        <div class="trust-badge d-flex align-items-center gap-3">
          <div class="trust-badge-icon">
            <i class="bi bi-clock-fill"></i>
          </div>
          <div class="trust-badge-content">
            <span class="trust-badge-title">ON-TIME DELIVERY</span>
            <span class="trust-badge-desc">We value your time and deliver on time.</span>
          </div>
        </div>

        <!-- Badge 4 -->
        <div class="trust-badge d-flex align-items-center gap-3">
          <div class="trust-badge-icon">
            <i class="bi bi-box-seam-fill"></i>
          </div>
          <div class="trust-badge-content">
            <span class="trust-badge-title">QUALITY PACKING</span>
            <span class="trust-badge-desc">High quality packing materials used.</span>
          </div>
        </div>

        <!-- Badge 5 -->
        <div class="trust-badge d-flex align-items-center gap-3">
          <div class="trust-badge-icon">
            <i class="bi bi-patch-check-fill"></i>
          </div>
          <div class="trust-badge-content">
            <span class="trust-badge-title">AFFORDABLE PRICES</span>
            <span class="trust-badge-desc">Best relocation solutions at competitive prices.</span>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Section 4: Copyright, Socials & Payments -->
  <?php $company_display = rtrim($company3, '.'); ?>
  <div class="footer-bottom-bar py-3">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center gap-3 flex-wrap">
        
        <!-- Copyright -->
        <div class="footer-copyright">
          &copy; <?= date('Y') ?> <?= $company_display ?>. All Rights Reserved.
        </div>

        <!-- Follow Us -->
        <div class="footer-follow-us d-flex align-items-center">
          <span class="follow-label text-white-50">FOLLOW US</span>
          <span class="footer-divider-line mx-3">|</span>
          <div class="footer-social-icons d-flex gap-2">
            <a href="<?= $facebookhtml ?>" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="<?= $instagramhtml ?>" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="<?= $twitterhtml ?>" target="_blank" rel="noopener" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="<?= $linkedinhtml ?>" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <!-- We Accept Payments -->
        <div class="footer-payments d-flex align-items-center">
          <span class="payments-label text-white-50">WE ACCEPT</span>
          <span class="footer-divider-line mx-3">|</span>
          <div class="payment-icons">
            <span class="payment-badge visa" title="Visa">VISA</span>
            <span class="payment-badge mastercard" title="Mastercard">
              <span class="mastercard-circles">
                <span class="circle-red"></span>
                <span class="circle-orange"></span>
              </span>
            </span>
            <span class="payment-badge upi" title="UPI">UPI</span>
            <span class="payment-badge paytm" title="Paytm">Paytm</span>
          </div>
        </div>

      </div>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp Button -->
<a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="whatsapp-float-btn" aria-label="Chat on WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>

<!-- Floating / Sticky Action Buttons (Call and Get Quote) -->
<div class="footer-fixed-actions">
  <div class="fixed-actions-container">
    <!-- Call Action Button -->
    <a href="<?= $phonehtml ?>" class="action-btn btn-call" aria-label="Call Us Now">
      <div class="action-btn-icon">
        <i class="bi bi-telephone-fill"></i>
      </div>
      <span class="action-btn-text">Call Now</span>
    </a>
    
    <!-- Get Quote Action Button -->
    <button type="button" class="action-btn btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal" aria-label="Get Free Quote">
      <div class="action-btn-icon">
        <i class="bi bi-file-earmark-text-fill"></i>
      </div>
      <span class="action-btn-text">Get Quote</span>
    </button>
  </div>
</div>


<?php $this->load->view('contacts/quotemodal'); ?>
<?php $this->load->view('contacts/callmeback_modal'); ?>
<?php $this->load->view('contacts/review_modal'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/js/form.js?v=1.2"></script>
</body>
</html>
