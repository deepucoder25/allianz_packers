<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

// Dynamic intercity FAQs Configuration Array for the route
$route_faqs = [
  [
    "q" => "What are the estimated charges for shifting from $from_city to $to_city?",
    "a" => "Intercity shifting costs depend on the volume of goods, type of vehicle used, and transit distance. Shifting of a few household items from $from_city to $to_city starts from ₹8,000, while a standard 1-2 BHK house relocation ranges between ₹15,000 to ₹45,000 depending on exact requirements.",
    "icon" => "bi-currency-rupee"
  ],
  [
    "q" => "How long does it take to transport goods from $from_city to $to_city?",
    "a" => "For intercity transit from $from_city to $to_city, a dedicated truck usually delivers goods within 2 to 4 days. If you choose a shared transport carrier (part-load), delivery can take between 4 to 7 days.",
    "icon" => "bi-clock"
  ],
  [
    "q" => "Do you provide goods transit insurance for $from_city to $to_city moves?",
    "a" => "Yes, we offer comprehensive transit insurance. This covers any damage or loss due to unforeseen circumstances or accidents during transit from $from_city to $to_city. The premium is normally 1.5% to 3% of the declared goods value.",
    "icon" => "bi-shield-check"
  ],
  [
    "q" => "Can I track my shifting status from $from_city to $to_city?",
    "a" => "Absolutely. We provide real-time updates and GPS tracking support for all intercity moves. Our customer support desk is available 24/7 to keep you updated on the truck's exact location during transit.",
    "icon" => "bi-geo-alt"
  ]
];
?>

<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current"><?= $from_city ?> to <?= $to_city ?></span>
        </nav>
        <h1>
            <span class="bc-title-white">Packers &amp; Movers From</span><br> 
            <span class="bc-title-orange"><?= $from_city ?> To <?= $to_city ?></span>
        </h1>
        <p class="bc-desc">
            Reliable, safe, and stress-free household relocation and vehicle shifting carrier services from <?= $from_city ?> to <?= $to_city ?>.
        </p>
        <div class="bc-features">
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-clock-history"></i></div>
                <div class="pill-text"><strong>Since <?= $startYear ?></strong><small><?= $yearsExperience ?> Years Legacy</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-patch-check-fill"></i></div>
                <div class="pill-text"><strong>ISO Certified</strong><small>Licensed &amp; Verified</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-people-fill"></i></div>
                <div class="pill-text"><strong>Expert Team</strong><small>Pan-India Support Staff</small></div>
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

<section class="pm-city-details-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-8">
        <div class="pm-city-content-card">
          <div class="pm-city-section-eyebrow">Intercity Shifting Services</div>
          <h2 class="pm-city-section-title">
            Packers &amp; Movers from <span class="pm-city-accent"><?= $from_city ?></span> to <span class="pm-city-accent"><?= $to_city ?></span>
          </h2>
          
          <div class="city-prose">
            <p>
              Are you planning a relocation from <strong><?= $from_city ?></strong> to <strong><?= $to_city ?></strong>? Shifting belongings across cities is a major task that requires skilled loading, heavy-duty transport, and premium packing to prevent damages. <strong><?= $company3 ?></strong> offers customized intercity shifting services designed to move your goods smoothly and safely.
            </p>
            <p>
              Whether you need to move household furniture, office setups, private cars, or two-wheelers, we employ specialized shipping containers, well-trained drivers, and multi-layer wrapping (bubble wraps, foam sheets, corrugated cardboard box) to secure your goods.
            </p>
          </div>
          
          <div class="city-feature-pills mt-4">
            <div class="city-pill"><i class="bi bi-shield-check"></i> Transit Insurance Coverage</div>
            <div class="city-pill"><i class="bi bi-truck"></i> Dedicated Shifting Carriers</div>
            <div class="city-pill"><i class="bi bi-box-seam"></i> Premium Cardboard Packaging</div>
            <div class="city-pill"><i class="bi bi-clock-history"></i> On-Time Shifting Guaranteed</div>
          </div>
        </div>

        <!-- Shifting Tariff / Pricing Table -->
        <div class="city-content-card mt-4" id="intercityPricingCard">
          <h3 class="city-section-title-sm mb-3">Estimated Relocation Tariff from <?= $from_city ?> to <?= $to_city ?></h3>
          <p class="text-muted mb-4">Here is a guide to intercity packers and movers charges for shifting goods between these cities. Final charges vary based on distance and volumetric cargo size.</p>
          
          <div class="table-responsive">
            <table class="table table-bordered align-middle intercity-pricing-table">
              <thead>
                <tr class="table-dark-header">
                  <th>Move Size / Service</th>
                  <th>Packing Charges</th>
                  <th>Transport Charges</th>
                  <th>Estimated Shifting Cost</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Few Household Items</strong></td>
                  <td>₹2,000 - ₹5,000</td>
                  <td>₹6,000 - ₹17,000</td>
                  <td><span class="price-highlight">₹8,000 - ₹22,000</span></td>
                </tr>
                <tr>
                  <td><strong>1 BHK Shifting</strong></td>
                  <td>₹4,000 - ₹8,000</td>
                  <td>₹11,000 - ₹22,000</td>
                  <td><span class="price-highlight">₹15,000 - ₹30,000</span></td>
                </tr>
                <tr>
                  <td><strong>2 BHK Shifting</strong></td>
                  <td>₹6,000 - ₹12,000</td>
                  <td>₹14,000 - ₹33,000</td>
                  <td><span class="price-highlight">₹20,000 - ₹45,000</span></td>
                </tr>
                <tr>
                  <td><strong>3 BHK Shifting</strong></td>
                  <td>₹8,000 - ₹15,000</td>
                  <td>₹17,000 - ₹40,000</td>
                  <td><span class="price-highlight">₹25,000 - ₹55,000</span></td>
                </tr>
                <tr>
                  <td><strong>4 BHK / Villa Shifting</strong></td>
                  <td>₹10,000 - ₹18,000</td>
                  <td>₹20,000 - ₹47,000</td>
                  <td><span class="price-highlight">₹30,000 - ₹65,000</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="pricing-table-disclaimer mt-2 d-flex align-items-start gap-2">
            <i class="bi bi-info-circle-fill text-muted mt-1"></i>
            <small class="text-muted">Disclaimer: GST, toll tax, octroi, and transit insurance charges are calculated extra depending on Government norms.</small>
          </div>
        </div>

        <!-- Relocation Step Timeline -->
        <div class="city-content-card mt-4" id="intercityProcessCard">
          <h3 class="city-section-title-sm mb-4">Relocation Process from <?= $from_city ?> to <?= $to_city ?></h3>
          
          <div class="intercity-timeline">
            <!-- Step 1 -->
            <div class="timeline-step-row d-flex gap-4 mb-4">
              <div class="step-badge bg-brand-red text-white flex-shrink-0">1</div>
              <div class="step-detail">
                <h5 class="step-title">Inquiry &amp; Virtual Shifting Survey</h5>
                <p class="step-desc text-muted mb-0">Share your move specifics. We schedule a quick virtual pre-move survey to list goods and provide a clear quotation without hidden charges.</p>
              </div>
            </div>
            
            <!-- Step 2 -->
            <div class="timeline-step-row d-flex gap-4 mb-4">
              <div class="step-badge bg-brand-red text-white flex-shrink-0">2</div>
              <div class="step-detail">
                <h5 class="step-title">Safe Multi-Layer Packing in <?= $from_city ?></h5>
                <p class="step-desc text-muted mb-0">Our professional packing crew arrives at your place in <?= $from_city ?> with heavy bubble wrapping sheets, foam pads, and carton boxes to wrap all fragile items securely.</p>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="timeline-step-row d-flex gap-4 mb-4">
              <div class="step-badge bg-brand-red text-white flex-shrink-0">3</div>
              <div class="step-detail">
                <h5 class="step-title">Secure Loading &amp; Route Transit</h5>
                <p class="step-desc text-muted mb-0">We sequence loading carefully in dedicated intercity shipping vehicles. The shipment is tracked during its road journey to <?= $to_city ?>.</p>
              </div>
            </div>

            <!-- Step 4 -->
            <div class="timeline-step-row d-flex gap-4">
              <div class="step-badge bg-brand-red text-white flex-shrink-0">4</div>
              <div class="step-detail">
                <h5 class="step-title">Unloading &amp; Inspection in <?= $to_city ?></h5>
                <p class="step-desc text-muted mb-0">We unload items safely at your destination in <?= $to_city ?>. You inspect and verify all boxes against the checklist for a damage-free move.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Route specific FAQs Section -->
        <div class="city-content-card mt-4" id="intercityFaqCard">
          <div class="faq-header-wrapper d-flex justify-content-between align-items-start mb-4">
            <div class="faq-header-left">
              <span class="faq-badge">ROUTE FAQS</span>
              <h3 class="faq-main-title mt-2">Route Shifting <span class="text-highlight">FAQs</span></h3>
              <p class="faq-subtitle mb-0 text-muted">Answers to frequently asked questions about moving from <?= $from_city ?> to <?= $to_city ?>.</p>
            </div>
          </div>

          <div class="city-faq-list mt-3" id="intercityFaqAccordion">
            <?php foreach ($route_faqs as $i => $faq): ?>
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
              <div id="cfaq<?= $i ?>" class="collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#intercityFaqAccordion">
                <div class="city-faq-body">
                  <?= $faq['a'] ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div><!-- /col-lg-8 -->

      <!-- ============ RIGHT: SIDEBAR ============ -->
      <div class="col-lg-4 pm-city-sidebar-col">
        <!-- Quote Form at the top of Sidebar -->
        <div class="mb-4">
          <?php $this->load->view('contacts/quoteform.php') ?>
        </div>
        <?php include 'city_page_design/city_siderbar.php'; ?>
      </div><!-- /col-lg-4 -->

    </div><!-- /row -->

    <!-- Full width intercity routes list -->
    <?php
    $allowed_cities = [
        "Delhi", "Mumbai", "Bangalore", "Pune", "Hyderabad", 
        "Chennai", "Kolkata", "Noida", "Gurgaon", "Ghaziabad", 
        "Goa", "Jaipur", "Lucknow", "Patna", "Ahmedabad"
    ];
    if (in_array(strtolower(trim($city)), array_map('strtolower', $allowed_cities))):
    ?>
    <div class="row mt-4">
      <div class="col-12">
        <?php include 'city_page_design/city_from_to_links.php'; ?>
      </div>
    </div>
    <?php endif; ?>

  </div><!-- /container -->
</section>
