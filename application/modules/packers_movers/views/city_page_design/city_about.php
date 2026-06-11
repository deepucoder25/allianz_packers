<?php if (!defined('BASEPATH'))
  exit('No direct script access allowed');
include 'city_content.php';

// Dynamic FAQS Configuration Array
$faqs = [
  ["q" => "How do you ensure the safety of my belongings?",
   "a" => "We use high-quality packing materials, trained professionals, and modern handling techniques to ensure the safety of your items during the entire transit.",
   "icon" => "bi-shield-fill-check"],
  ["q" => "Do you provide insurance for goods transportation?",
   "a" => "Yes, we offer comprehensive goods-in-transit insurance options to cover any unforeseen situations during transportation.",
   "icon" => "bi-shield-check"],
  ["q" => "How long does it take to complete a move?",
   "a" => "Local moves usually take 4-8 hours depending on size, while domestic or long-distance moves take 2-5 days depending on the distance.",
   "icon" => "bi-clock"],
  ["q" => "Can you help with packing and unpacking?",
   "a" => "Absolutely! We provide end-to-end packing and unpacking services using high-grade materials and box systems.",
   "icon" => "bi-box-seam"],
  ["q" => "Do you offer interstate and international moving services?",
   "a" => "Yes, we have a robust national network for interstate moves and offer secure international shipping options.",
   "icon" => "bi-globe"]
];

// Dynamic Reviews Configuration Array
$reviews = [
  [
    "stars" => 5,
    "text" => "$company3 made our home shifting so smooth and hassle-free. Everything arrived on time and in perfect condition.",
    "name" => "Rahul Mehta",
    "city" => "Mumbai",
    "initials" => "RM",
    "grad" => "grad-1"
  ],
  [
    "stars" => 5,
    "text" => "Very professional team! They packed everything with care and handled our move with excellent coordination.",
    "name" => "Priya Sharma",
    "city" => "Bangalore",
    "initials" => "PS",
    "grad" => "grad-2"
  ],
  [
    "stars" => 5,
    "text" => "Great experience from start to finish. The team was punctual, polite, and very efficient. Highly recommended!",
    "name" => "Amit Verma",
    "city" => "Delhi",
    "initials" => "AV",
    "grad" => "grad-3"
  ],
  [
    "stars" => 5,
    "text" => "Shifted my flat inside " . $city . ". They arrived at 8 AM sharp and finished packing faster than expected. No damage to wooden furniture.",
    "name" => "Sandeep Verma",
    "city" => $city,
    "initials" => "SV",
    "grad" => "grad-4"
  ]
];
?>



<section class="pm-city-details-section">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- About Banner Card -->
        <div class="pm-city-about-banner-card mb-4">
          <div class="row align-items-center">
            <div class="col-md-7">
              <div class="banner-eyebrow">About Us</div>
              <h3 class="banner-title">Making Every Move Simple, Safe & Stress-Free</h3>
              <p class="banner-desc"><?= $company3 ?> has been a trusted name in the relocation
                industry for over a decade. We combine experienced professionals, modern equipment, and a customer-first
                approach to deliver seamless moving experiences.</p>
              <a href="<?= site_url('about-us') ?>" class="banner-btn">
                Know More About Us <i class="bi bi-arrow-right"></i>
              </a>
            </div>
            <div class="col-md-5 mt-4 mt-md-0">
              <div class="banner-image-wrap">
                <img src="<?= base_url('assets/images/services_modules/local_shifting.jpg') ?>"
                  alt="About <?= $company3 ?>" class="img-fluid rounded-4" loading="lazy">
              </div>
            </div>
          </div>
          <!-- Features Row Card -->
          <div class="city-content-card mt-4">
            <div class="row align-items-stretch text-start g-4">

              <!-- Feature 1 -->
              <div class="col-md-3 feature-col position-relative">
                <div class="feature-item">
                  <div class="feature-icon-box bg-pink-tint text-red mb-3">
                    <i class="bi bi-shield-fill-check"></i>
                  </div>
                  <h5 class="feature-title">Safe & Secure</h5>
                  <p class="feature-desc mb-0">We ensure the highest standards of safety for your belongings.</p>
                </div>
              </div>

              <!-- Feature 2 -->
              <div class="col-md-3 feature-col position-relative">
                <div class="feature-item">
                  <div class="feature-icon-box bg-green-tint text-green mb-3">
                    <i class="bi bi-people-fill"></i>
                  </div>
                  <h5 class="feature-title">Expert Team</h5>
                  <p class="feature-desc mb-0">Skilled and trained professionals for a smooth moving experience.</p>
                </div>
              </div>

              <!-- Feature 3 -->
              <div class="col-md-3 feature-col position-relative">
                <div class="feature-item">
                  <div class="feature-icon-box bg-purple-tint text-purple mb-3">
                    <i class="bi bi-clock-fill"></i>
                  </div>
                  <h5 class="feature-title">On-Time Delivery</h5>
                  <p class="feature-desc mb-0">We value your time and ensure timely and reliable delivery.</p>
                </div>
              </div>

              <!-- Feature 4 -->
              <div class="col-md-3 feature-col">
                <div class="feature-item">
                  <div class="feature-icon-box bg-orange-tint text-orange mb-3">
                    <i class="bi bi-currency-rupee"></i>
                  </div>
                  <h5 class="feature-title">Affordable Pricing</h5>
                  <p class="feature-desc mb-0">Transparent pricing with no hidden charges.</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- About Card -->
        <div class="pm-city-content-card">

          <!-- Eyebrow + Heading -->
          <div class="pm-city-section-eyebrow">Top Rated Relocation</div>
          <h2 class="pm-city-section-title">
            <span class="pm-city-accent"><?= $city ?></span> Packers and Movers
          </h2>

          <div class="city-prose">
            <?php echo $htmlcontent; ?>
          </div>

          <!-- Feature Pills -->
          <div class="city-feature-pills mt-4">
            <div class="city-pill"><i class="bi bi-shield-check"></i> 100% Insured Shifting</div>
            <div class="city-pill"><i class="bi bi-truck"></i> Real-time GPS Tracking</div>
            <div class="city-pill"><i class="bi bi-box-seam"></i> Premium Multi-layer Packing</div>
            <div class="city-pill"><i class="bi bi-clock-history"></i> On-Time Delivery Guaranteed</div>
          </div>

          <div class="pm-city-map mt-4">
            <?php include 'city_map.php'; ?>
          </div>

        </div><!-- /pm-city-content-card -->

        <?php echo $htmlcontent1; ?>
        <?php echo $htmlcontent2; ?>

        <?php include 'city_reviews.php'; ?>
        <?php include 'city_faq.php'; ?>

      </div><!-- /col-lg-8 -->

      <!-- ============ RIGHT: SIDEBAR (col-lg-4) ============ -->
      <div class="col-lg-4 pm-city-sidebar-col">
        <?php include 'city_siderbar.php'; ?>
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
        <?php include 'city_from_to_links.php'; ?>
      </div>
    </div>
    <?php endif; ?>

  </div><!-- /container -->
</section>