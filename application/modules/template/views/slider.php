<section class="main-hero-slider">
  <!-- Bottom Left Decorative Wave -->
  <div class="slider-decor-wave d-none d-xl-block">
    <svg viewBox="0 0 500 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,20 C150,70 300,120 500,120 L0,120 Z" fill="var(--brand-red)"></path>
    </svg>
  </div>

  <!-- Desktop Slider Wrapper -->
  <div class="slider-wrapper">
    <div class="container">
      <div class="row align-items-stretch">
        
        <!-- Left Column (Content) -->
        <div class="col-xl-7 d-flex flex-column justify-content-center text-col-wrap">
          
          <!-- Top Section (Eyebrow, Title, Description) -->
          <div class="hero-content-top text-center text-xl-start">
            <div class="hero-badge-wrap mb-3">
              <span class="hero-badge shadow-sm">
                <span class="pulse-dot"></span> India's Most Trusted Moving Company
              </span>
            </div>
            
            <h1 class="hero-title">
              WE MOVE YOUR
              <span class="text-brand-red">WORLD WITH CARE</span>
            </h1>
            
            <p class="hero-desc">
              From homes to offices, we provide end-to-end moving solutions that are safe, fast & hassle-free.
            </p>
            
            <!-- Value Icons Row -->
            <div class="hero-value-icons my-4">
              <div class="value-icons-row-wrap d-flex justify-content-between align-items-start">
                
                <!-- Item 1 -->
                <div class="value-item text-center">
                  <div class="value-icon-circle-wrap mb-2">
                    <div class="value-icon-circle">
                      <i class="bi bi-shield-check"></i>
                    </div>
                  </div>
                  <strong class="value-title d-block">100% Safe</strong>
                  <span class="value-desc">Your belongings are in safe hands</span>
                </div>

                <div class="value-divider d-xl-none"></div>

                <!-- Item 2 -->
                <div class="value-item text-center">
                  <div class="value-icon-circle-wrap mb-2">
                    <div class="value-icon-circle">
                      <i class="bi bi-clock"></i>
                    </div>
                  </div>
                  <strong class="value-title d-block">On-Time Delivery</strong>
                  <span class="value-desc">We value your time and deliver on time</span>
                </div>

                <div class="value-divider d-xl-none"></div>

                <!-- Item 3 -->
                <div class="value-item text-center">
                  <div class="value-icon-circle-wrap mb-2">
                    <div class="value-icon-circle">
                      <i class="bi bi-box-seam"></i>
                    </div>
                  </div>
                  <strong class="value-title d-block">Quality Packing</strong>
                  <span class="value-desc">High quality packing materials used</span>
                </div>

                <div class="value-divider d-xl-none"></div>

                <!-- Item 4 -->
                <div class="value-item text-center">
                  <div class="value-icon-circle-wrap mb-2">
                    <div class="value-icon-circle">
                      <i class="bi bi-currency-rupee"></i>
                    </div>
                  </div>
                  <strong class="value-title d-block">Affordable Prices</strong>
                  <span class="value-desc">Best relocation solutions at competitive prices</span>
                </div>

              </div>
            </div>
          </div>

          <!-- Mobile Hero Image (Only on Mobile/Tablet between icons and buttons) -->
          <div class="mobile-hero-image-container d-block d-xl-none my-3">
              <!-- Floating Badge -->
              <div class="mobile-floating-badge shadow-sm">
                <div class="badge-icon-wrap">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div class="badge-text-wrap">
                  <span class="badge-label">We've Moved</span>
                  <strong class="badge-count"><?= $happyClients ?></strong>
                  <span class="badge-sublabel">Happy Customers</span>
                </div>
              </div>
          </div>

          <!-- CTA Buttons -->
          <div class="hero-ctas d-flex gap-3 mb-4 mb-xl-0">
            <!-- Call Button -->
            <a href="<?= $phonehtml ?>" class="hero-cta-btn btn-call shadow-sm text-decoration-none d-flex align-items-center justify-content-center">
              <div class="cta-icon-wrap">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <div class="cta-text-wrap">
                <span class="cta-label">CALL US NOW</span>
                <strong class="cta-val"><?= $phone ?></strong>
              </div>
            </a>
            
            <!-- View Services Button -->
            <a href="<?= site_url('our-services') ?>" class="hero-cta-btn btn-services shadow-sm text-decoration-none d-flex align-items-center justify-content-center">
              <div class="cta-icon-wrap">
                <i class="bi bi-file-earmark-text-fill"></i>
              </div>
              <div class="cta-text-wrap">
                <span class="cta-label">VIEW OUR SERVICES</span>
                <strong class="cta-val">Explore More <i class="bi bi-chevron-right ms-1"></i></strong>
              </div>
            </a>
          </div>

        </div>

        <!-- Right Column (Form Card) -->
        <div class="col-xl-5 d-flex align-items-center mt-4 mt-xl-0 form-col-wrap">
          <div class="hero-form-wrapper w-100">
            <?php $this->load->view('contacts/quoteform.php') ?>
          </div>
        </div>

      </div>

      <!-- Why Choose Bar (Desktop Only) -->
      <div class="hero-why-choose-bar d-none d-xl-flex align-items-center shadow-sm rounded-4 bg-white mt-4 mx-auto">
        <div class="why-choose-label-flag">
          <span>WHY</span>
          <span>CHOOSE</span>
          <span>US?</span>
        </div>
        <div class="why-choose-items-row d-flex justify-content-between flex-grow-1 px-4">
          <!-- Item 1 -->
          <div class="why-choose-item d-flex align-items-center gap-3">
            <div class="item-icon-circle"><i class="bi bi-people-fill"></i></div>
            <div class="item-text">
              <strong class="item-title">Experienced Team</strong>
              <span class="item-desc">Skilled professionals you can trust</span>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="why-choose-item d-flex align-items-center gap-3">
            <div class="item-icon-circle"><i class="bi bi-clock-history"></i></div>
            <div class="item-text">
              <strong class="item-title">Fast & Reliable</strong>
              <span class="item-desc">On-time pickup & delivery, every time</span>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="why-choose-item d-flex align-items-center gap-3">
            <div class="item-icon-circle"><i class="bi bi-box-seam-fill"></i></div>
            <div class="item-text">
              <strong class="item-title">Door-to-Door Service</strong>
              <span class="item-desc">We pick up and deliver at your doorstep</span>
            </div>
          </div>
          <!-- Item 4 -->
          <div class="why-choose-item d-flex align-items-center gap-3">
            <div class="item-icon-circle"><i class="bi bi-headset"></i></div>
            <div class="item-text">
              <strong class="item-title">24/7 Customer Support</strong>
              <span class="item-desc">We're here to help you anytime</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
